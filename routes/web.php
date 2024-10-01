<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\TierController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MatchRecordController;
use App\Http\Controllers\LadderController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckNoticeOwner;
use App\Http\Middleware\CheckRole;

use App\Models\Event;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 메인페이지
Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('terms', [TermsController::class, 'create'])
                ->name('terms');

Route::post('terms', [TermsController::class, 'move_register'])
->name('move_register');

// 공지사항 리스트
Route::get('notice', [NoticeController::class, 'index'])
->name('notice_index');

// 공지사항 글쓰기 페이지
Route::get('notice/create', [NoticeController::class, 'create'])
->middleware('can:notice');

// 공지사항 글쓰기 로직
Route::post('notice/write', [NoticeController::class, 'store'])
->middleware('can:notice');

// 공지사항 상세 페이지
Route::get('notice/{notice_id}', [NoticeController::class, 'show']);

// 공지사항 수정 페이지
Route::get('notice/{notice_id}/edit', [NoticeController::class, 'edit'])->middleware(CheckNoticeOwner::class);

// 공지사항 수정 페이지 로직
Route::put('notice/{notice_id}', [NoticeController::class, 'update'])->name('notice.update');

// 공지사항 삭제 페이지 로직
Route::delete('notice/{notice_id}', [NoticeController::class, 'destroy'])->middleware(CheckNoticeOwner::class)->name('notice.destroy');

/* 티어 */
Route::get('tiers', [TierController::class, 'index']);

/* ELO 시스템 관련 */
// 전적확인
Route::get('elo/stats', function () {
    return view('elo.stats');
});

/* 대회 */
// 대회일정
Route::get('tournament/schedule', function () {
    return view('tournament.schedule');
});

// 대회매치 신청
// 미들웨어가 필요한 라우트
Route::middleware([CheckRole::class . ':admin|juniorMember'])->group(function () {
    Route::resource('tournament/match-schedule', EventController::class)->only(['create', 'store', 'update', 'edit', 'destroy']);
});

// 로그인 없이 접근 가능한 라우트
Route::resource('tournament/match-schedule', EventController::class)->only(['index', 'show']);


// 대회일정 로직
Route::get('/events', function () {
    return response()->json(Event::all());
});

// 래더공지
Route::get('ladder/notice', function () {
    return view('ladder.notice');
});

// 래더기록 신청
// 미들웨어가 필요한 라우트
Route::middleware([CheckRole::class . ':admin|juniorMember|regularMember|root'])->group(function () {
    Route::resource('ladder/match-record', MatchRecordController::class)->only(['create', 'store', 'update', 'edit', 'destroy']);
});
// 래더기록
Route::resource('ladder/match-record', MatchRecordController::class)->only(['index', 'show']);
// 래더점수
Route::get('ladder/tiers', [LadderController::class, 'index']);


require __DIR__.'/auth.php';
