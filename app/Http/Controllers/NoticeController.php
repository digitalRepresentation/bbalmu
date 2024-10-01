<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\NoticeBoard;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = NoticeBoard::orderBy('created_at', 'desc')->paginate(20);
        return view('notice.list', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notice.write');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $notice = new NoticeBoard();
        $user = Auth::user();

        if ($request->hasFile('main_image')) {
            $validatedData['main_image'] = $request->file('main_image')->store('images');
        }

        $notice->title = $validatedData['title'];
        $notice->content = $validatedData['content'];
        $notice->writer_id = $user->id;
        $notice->save();

        // return redirect()->route('notice.index')->with('success', '글 작성을 완료했습니다.');
        return redirect('/notice')->with('success', '글 작성을 완료했습니다.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NoticeBoard  $notice_id
     * @return \Illuminate\Http\Response
     */
    public function show($notice_id)
    {
        $notice = NoticeBoard::findOrFail($notice_id);
        // 조회수 증감
        $notice->increment('views');
        return view('notice.detail', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NoticeBoard  $notice_id
     * @return \Illuminate\Http\Response
     */
    public function edit($notice_id)
    {
        $notice = NoticeBoard::findOrFail($notice_id);
        return view('notice.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $notice_id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        
        if ($request->hasFile('main_image')) {
            $validatedData['main_image'] = $request->file('main_image')->store('images');
        }

        $notice = NoticeBoard::findOrFail($notice_id);
        $notice->title = $validatedData['title'];
        $notice->content = $validatedData['content'];
        $notice->update($request->all());

        return redirect('/notice')->with('success', '글 수정을 완료했습니다.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($notice_id)
    {
        $notice = NoticeBoard::findOrFail($notice_id);
        $notice->delete();

        return redirect('/notice')->with('success', '글 삭제가 완료되었습니다.');
    }
}
