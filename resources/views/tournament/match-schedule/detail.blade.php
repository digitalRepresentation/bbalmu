<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
@include('layouts.header')
  <section class="p-5 mx-auto w-75 border border-light">
    <div>
      <h3 class="ms-3">■공지사항</h3>
      <div class="bg-primary text-white p-3"><span class="fs-3">{{ $notice->title }}</span> <span class="float-end">{{ \Carbon\Carbon::parse($notice->created_at)->format('Y-m-d H:i') }}</span></div>
      <div class="p-3">{{ $notice->user->name }} <span class="float-end">조회 수: {{ $notice->views }}</span></div>
      
      <div class="border-top border-light p-3 bt-5"> {!! nl2br(e($notice->content)) !!} </div>

      
    </div>

    <div>
    @can('notice')
        @if(Auth::id() === $notice->writer_id)
        <form action="{{ route('notice.destroy', $notice->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger float-end" type="submit">삭제</button>
        </form>
        <a href="/notice/{{ $notice->id }}/edit" class="btn btn-warning float-end">수정</a>
        
      
        @endif
    @endcan
    </div>
  </section>    
  @include('layouts.footer')
</body>
</html>

