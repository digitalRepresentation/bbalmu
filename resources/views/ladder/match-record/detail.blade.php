<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
@include('layouts.header')
  <section class="p-5 mx-auto w-75 border border-light">
    <div>
      <h3 class="ms-3">■래더전적 기록내용</h3>
      <div class="bg-primary text-white p-3"><span class="fs-3">{{ $matchRecord->player1_id }},{{ $matchRecord->player2_id }}, {{ $matchRecord->player3_id }} vs {{ $matchRecord->player4_id }}, {{ $matchRecord->player5_id }}, {{ $matchRecord->player6_id }} {{ $matchRecord->winning_team }}팀 승</span> <span class="float-end">{{ \Carbon\Carbon::parse($matchRecord->created_at)->format('Y-m-d H:i') }}</span></div>
      
      <hr>

      <p>방제이름: {{ $matchRecord->title }}</p>
      <p>매치일시: {{ \Carbon\Carbon::parse($matchRecord->match_date)->format('Y-m-d H:i') }}</p>
      <p>맵이름: {{ $matchRecord->map_name }}</p>
      <p>승리팀: {{ $matchRecord->winning_team }}팀</p>
      
      <hr>
      <h4>1팀</h4>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">배틀넷ID</th>
            <th scope="col">종족</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>{{ $matchRecord->player1_id }}</td>
            <td>{{ $matchRecord->player1_race_id }}</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>{{ $matchRecord->player2_id }}</td>
            <td>{{ $matchRecord->player2_race_id }}</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>{{ $matchRecord->player3_id }}</td>
            <td>{{ $matchRecord->player3_race_id }}</td>
          </tr>
        </tbody>
      </table>

      <h5>2팀</h5>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">배틀넷ID</th>
            <th scope="col">종족</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">4</th>
            <td>{{ $matchRecord->player4_id }}</td>
            <td>{{ $matchRecord->player4_race_id }}</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>{{ $matchRecord->player5_id }}</td>
            <td>{{ $matchRecord->player5_race_id }}</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>{{ $matchRecord->player6_id }}</td>
            <td>{{ $matchRecord->player6_race_id }}</td>
          </tr>
        </tbody>
      </table>
      
      <p>승리팀 점수 : +{{ $matchRecord->win_score }} </p>
      <p>패배팀 점수 : -{{ $matchRecord->lose_score }} </p>

      <p>리플레이파일[download] : <a href="/storage/replays/{{ $matchRecord->file_name }}">{{ $matchRecord->file_name }}</a></p>
    </div>

  </section>    
  @include('layouts.footer')
</body>
</html>

