<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\MatchRecord;
use App\Models\MatchScoreRecord;
use App\Models\Tier;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;



class MatchRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchRecords = MatchRecord::orderBy('created_at', 'desc')->get();
        return view('ladder.match-record.list', compact('matchRecords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ladder.match-record.write');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all(); // JSON 데이터를 받아옴


         // 유효성 체크
         $validatedData = $request->validate([
            'rep_file' => 'required|file|max:2048',
        ]);

        // 리플레이 파일 서버에 저장
        if($request->file('rep_file')->isValid()) {
            $timestamp = Carbon::now()->format('YmdHis');
            $fileName = $timestamp . '.rep'; // 파일명 생성
            $path = $request->file('rep_file')->storeAs('public/replays', $fileName);
            // 저장된 파일 경로: storage/app/public/replays/yyyymmddhhmmss.rep
        }

        

        // 에러체크
        // 1. 전적기록에서 들어있는 유저 정보가 존재 하는지
        // 2. 방제에 "3040래더"를 붙였는지


        $playerIds = [
            $data["player1_id"],
            $data["player2_id"],
            $data["player3_id"],
            $data["player4_id"],
            $data["player5_id"],
            $data["player6_id"]
        ];

        $missingPlayers = [];
        
        foreach ($playerIds as $playerId) {
            $exists = DB::table('tiers')
                ->where('starcraft_name', $playerId)
                ->exists();
        
            if (!$exists) {
                $missingPlayers[] = $playerId;
            }
        }

        if (!empty($missingPlayers)) {
            return redirect('/ladder/match-record')->with('error', "다음 유저 정보가 존재하지 않습니다: " . implode(", ", $missingPlayers));
        }

        // if(!Str::contains($data["title"], "래더3040")) {
        //     return redirect('/ladder/match-record')->with('error', "방 제목이 '래더3040'이 아닙니다.");
        // }

        $matchRecord = new MatchRecord();
        $matchScoreRecord = new MatchScoreRecord();
        $tier = new Tier();

        $user = Auth::user();
        

        $formattedDate = Carbon::parse($data['match_date']);

        $matchRecord->match_date = $formattedDate;
        $matchRecord->title = $data['title'];
        $matchRecord->map_name = $data['map_name'];
        $matchRecord->player1_id = $data['player1_id'];
        $matchRecord->player1_race_id = $data['player1_race_id'];
        $matchRecord->player2_id = $data['player2_id'];
        $matchRecord->player2_race_id = $data['player2_race_id'];
        $matchRecord->player3_id = $data['player3_id'];
        $matchRecord->player3_race_id = $data['player3_race_id'];
        $matchRecord->player4_id = $data['player4_id'];
        $matchRecord->player4_race_id = $data['player4_race_id'];
        $matchRecord->player5_id = $data['player5_id'];
        $matchRecord->player5_race_id = $data['player5_race_id'];
        $matchRecord->player6_id = $data['player6_id'];
        $matchRecord->player6_race_id = $data['player6_race_id'];
        $matchRecord->winning_team = $data['winning_team'];
        $matchRecord->file_name = $fileName;


        $team1PlayerIds = [
            $data["player1_id"],
            $data["player2_id"],
            $data["player3_id"]
        ];

        $team2PlayerIds = [
            $data["player4_id"],
            $data["player5_id"],
            $data["player6_id"]
        ];

        $team1PlayersScore = 0;
        $team2PlayersScore = 0;
        
        $team1Ratings = [];
        $team2Ratings = [];

        foreach ($team1PlayerIds as $team1PlayerId) {
            $team1Player = DB::table('tiers')
                ->select('ladder_score')
                ->where('starcraft_name', $team1PlayerId)
                ->first();

            $team1Ratings[] = $team1Player->ladder_score;
        }

        foreach ($team2PlayerIds as $team2PlayerId) {
            $team2Player = DB::table('tiers')
                ->select('ladder_score')
                ->where('starcraft_name', $team2PlayerId)
                ->first();

            $team2Ratings[] = $team2Player->ladder_score;
        }

        $matchRecord->writer_id = $user->id;

        if($data['winning_team'] == 1) {
            $team1Win = true; // 팀 1이 승리
        }elseif($data['winning_team'] == 2) {
            $team1Win = false; // 팀 2가 승리
        }
        

        list($newTeam1Ratings, $newTeam2Ratings) = calculateElo($team1Ratings, $team2Ratings, $team1Win);

        echo "팀 1의 새로운 레이팅: " . implode(", ", $newTeam1Ratings) . "\n";
        echo "팀 2의 새로운 레이팅: " . implode(", ", $newTeam2Ratings) . "\n";

        exit;

        // foreach ($team1PlayerIds as $team1PlayerId) {
        //     $team1Player = DB::table('tiers')
        //         ->select('ladder_score')
        //         ->where('starcraft_name', $team1PlayerId)
        //         ->first();

        //     $team1PlayersScore += $team1Player->ladder_score;
        // }

        // foreach ($team2PlayerIds as $team2PlayerId) {
        //     $team2Player = DB::table('tiers')
        //         ->select('ladder_score')
        //         ->where('starcraft_name', $team2PlayerId)
        //         ->first();

        //     $team2PlayersScore += $team2Player->ladder_score;
        // }


        // $matchRecord->team1_score = $team1PlayersScore;
        // $matchRecord->team2_score = $team2PlayersScore;
        // $matchRecord->writer_id = $user->id;
        


        // 1~200점차 11, 9
        // 201~400점차 12, 8
        // 401~600점차 13, 7
        // 601~800점차 14, 6
        // 801~1000점차 15, 5
        // 1001~1200점차 16, 4
        // 1201~1400점차 17, 3
        // 1401~1500점차 18, 2
        // 1500점차 이상 19, 1


        // $teamVsScore = abs($team1PlayersScore - $team2PlayersScore);

        // if($teamVsScore  == 0) {
        //     $aScore = 10;
        //     $bScore = 10;
        // }elseif($teamVsScore  >= 1 && $teamVsScore  <= 200) {
        //     $aScore = 11;
        //     $bScore = 9;
        // }elseif($teamVsScore  >= 201 && $teamVsScore  <= 400) {
        //     $aScore = 12;
        //     $bScore = 8;
        // }elseif($teamVsScore >= 401 && $teamVsScore <= 600) {
        //     $aScore = 13;
        //     $bScore = 7;
        // }elseif($teamVsScore >= 601 && $teamVsScore <= 800) {
        //     $aScore = 14;
        //     $bScore = 6;
        // }elseif($teamVsScore >= 801 && $teamVsScore <= 1000) {
        //     $aScore = 15;
        //     $bScore = 5;
        // }elseif($teamVsScore >= 1001 && $teamVsScore <= 1200) {
        //     $aScore = 16;
        //     $bScore = 4;
        // }elseif($teamVsScore >= 1201 && $teamVsScore <= 1400) {
        //     $aScore = 17;
        //     $bScore = 3;
        // }elseif($teamVsScore >= 1401 && $teamVsScore <= 1500) {
        //     $aScore = 18;
        //     $bScore = 2;
        // }elseif($teamVsScore >= 1501) {
        //     $aScore = 19;
        //     $bScore = 1;
        // }

        // if($team1PlayersScore - $team2PlayersScore > 0) {
        //     $aWinScore = $bScore;
        //     $aLoseScore = $bScore;
        //     $bWinScore = $aScore;
        //     $bLoseScore = $aScore;

        // }elseif($team2PlayersScore - $team1PlayersScore > 0) {
        //     $aWinScore = $aScore;
        //     $aLoseScore = $aScore;
        //     $bWinScore = $bScore;
        //     $bLoseScore = $bScore;
        // }else {
        //     $aWinScore = $aScore;
        //     $aLoseScore = $aScore;
        //     $bWinScore = $aScore;
        //     $bLoseScore = $aScore;
        // }


        $tierIds = Tier::whereIn('starcraft_name', [$data['player1_id'], $data['player2_id'], $data['player3_id'], $data['player4_id'], $data['player5_id'], $data['player6_id']])
        ->pluck('id');
        $arrayOfTierIds = $tierIds->toArray();
        
        $teamRaces = $data['player1_race_id'] . $data['player2_race_id'] . $data['player3_race_id'];
        if($teamRaces == "ProtossProtossProtoss") {
            $teamRace = "PPP";
        }elseif($teamRaces == "ProtossProtossTerran") {
            $teamRace = "PPT";
        }elseif($teamRaces == "ProtossTerranProtoss") {
            $teamRace = "PPT";
        }elseif($teamRaces == "TerranProtossProtoss") {
            $teamRace = "PPT";
        }elseif($teamRaces == "ProtossProtossZerg") {
            $teamRace = "PPZ";
        }elseif($teamRaces == "ProtossZergProtoss") {
            $teamRace = "PPZ";
        }elseif($teamRaces == "ZergProtossProtoss") {
            $teamRace = "PPZ";
        }elseif($teamRaces == "ProtossTerranZerg") {
            $teamRace = "PTZ";
        }elseif($teamRaces == "ProtossZergTerran") {
            $teamRace = "PTZ";
        }elseif($teamRaces == "TerranProtossZerg") {
            $teamRace = "PTZ";
        }elseif($teamRaces == "TerranZergProtoss") {
            $teamRace = "PTZ";
        }elseif($teamRaces == "ZergTerranProtoss") {
            $teamRace = "PTZ";
        }elseif($teamRaces == "ZergProtossTerran") {
            $teamRace = "PTZ";
        }else {
            $teamRace = "OTHER";
        }
        
        
        /* 래더 점수 변동 */
        if($data['winning_team'] == 1) {
            Tier::whereIn('starcraft_name', [$data['player1_id'], $data['player2_id'], $data['player3_id']])
            ->increment('ladder_score', $aWinScore);

            Tier::whereIn('starcraft_name', [$data['player4_id'], $data['player5_id'], $data['player6_id']])
            ->decrement('ladder_score', $bLoseScore);

            $matchRecord->win_score = $aWinScore;
            $matchRecord->lose_score = $bLoseScore;

            /* 래더 전적 변동 */
            MatchScoreRecord::whereIn('starcraft_id', [$arrayOfTierIds[0], $arrayOfTierIds[1], $arrayOfTierIds[2]])
            ->increment('all_win', 1);

            MatchScoreRecord::whereIn('starcraft_id', [$arrayOfTierIds[0], $arrayOfTierIds[1], $arrayOfTierIds[2]])
            ->increment($teamRace.'_win', 1);

            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[0])
            ->increment(substr($data['player1_race_id'], 0, 1).'_win', 1);
            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[1])
            ->increment(substr($data['player2_race_id'], 0, 1).'_win', 1);
            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[2])
            ->increment(substr($data['player3_race_id'], 0, 1).'_win', 1);

            MatchScoreRecord::whereIn('starcraft_id', [$arrayOfTierIds[3], $arrayOfTierIds[4], $arrayOfTierIds[5]])
            ->increment('all_lose', 2);

            MatchScoreRecord::whereIn('starcraft_id', [$arrayOfTierIds[3], $arrayOfTierIds[4], $arrayOfTierIds[5]])
            ->increment($teamRace.'_lose', 1);

            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[3])
            ->increment(substr($data['player4_race_id'], 0, 1).'_lose', 1);
            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[4])
            ->increment(substr($data['player5_race_id'], 0, 1).'_lose', 1);
            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[5])
            ->increment(substr($data['player6_race_id'], 0, 1).'_lose', 1);
    
        }elseif($data['winning_team'] == 2) {
            Tier::whereIn('starcraft_name', [$data['player1_id'], $data['player2_id'], $data['player3_id']])
            ->decrement('ladder_score', $aLoseScore);

            Tier::whereIn('starcraft_name', [$data['player4_id'], $data['player5_id'], $data['player6_id']])
            ->increment('ladder_score', $bWinScore);

            $matchRecord->win_score = $bWinScore;
            $matchRecord->lose_score = $aLoseScore;

            /* 래더 전적 변동 */
            MatchScoreRecord::whereIn('starcraft_id', [$arrayOfTierIds[3], $arrayOfTierIds[4], $arrayOfTierIds[5]])
            ->increment('all_win', 2);
            MatchScoreRecord::whereIn('starcraft_id', [$arrayOfTierIds[3], $arrayOfTierIds[4], $arrayOfTierIds[5]])
            ->increment($teamRace.'_win', 1);

            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[3])
            ->increment(substr($data['player4_race_id'], 0, 1).'_win', 1);
            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[4])
            ->increment(substr($data['player5_race_id'], 0, 1).'_win', 1);
            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[5])
            ->increment(substr($data['player6_race_id'], 0, 1).'_win', 1);

            

            MatchScoreRecord::whereIn('starcraft_id', [$arrayOfTierIds[0], $arrayOfTierIds[1], $arrayOfTierIds[2]])
            ->increment('all_lose', 1);

            MatchScoreRecord::whereIn('starcraft_id', [$arrayOfTierIds[0], $arrayOfTierIds[1], $arrayOfTierIds[2]])
            ->increment($teamRace.'_lose', 1);

            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[0])
            ->increment(substr($data['player1_race_id'], 0, 1).'_lose', 1);
            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[1])
            ->increment(substr($data['player2_race_id'], 0, 1).'_lose', 1);
            MatchScoreRecord::where('starcraft_id', $arrayOfTierIds[2])
            ->increment(substr($data['player3_race_id'], 0, 1).'_lose', 1);

            
        }


        $matchRecord->save();
        

        return redirect('/ladder/match-record')->with('success', '전적 기록을 저장하였습니다.');

        function calculateElo($team1Ratings, $team2Ratings, $team1Win, $k = 20) {
            // 팀 평균 레이팅 계산
            $team1Average = array_sum($team1Ratings) / count($team1Ratings);
            $team2Average = array_sum($team2Ratings) / count($team2Ratings);
            
            // 예상 승리 확률 계산
            $expectedScoreTeam1 = 1 / (1 + pow(10, ($team2Average - $team1Average) / 400));
            $expectedScoreTeam2 = 1 - $expectedScoreTeam1;
            
            // 실제 경기 결과 설정
            $actualScoreTeam1 = $team1Win ? 1 : 0;
            $actualScoreTeam2 = 1 - $actualScoreTeam1;
            
            // 새로운 레이팅 계산 (소수점 반올림)
            $newTeam1Ratings = [];
            $newTeam2Ratings = [];
            
            foreach ($team1Ratings as $rating) {
                $newRating = round($rating + $k * ($actualScoreTeam1 - $expectedScoreTeam1));
                $newTeam1Ratings[] = $newRating;
            }
            
            foreach ($team2Ratings as $rating) {
                $newRating = round($rating + $k * ($actualScoreTeam2 - $expectedScoreTeam2));
                $newTeam2Ratings[] = $newRating;
            }
            
            return [$newTeam1Ratings, $newTeam2Ratings];
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matchRecord = MatchRecord::findOrFail($id);
        return view('ladder.match-record.detail', compact('matchRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
