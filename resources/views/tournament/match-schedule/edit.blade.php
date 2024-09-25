<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
@include('layouts.header')
  <section class="p-5 mx-auto w-75 border border-light">
    <h3 class="ms-3">■공지사항 글쓰기</h3>
    @if ($errors->has('title'))
      <div class="alert alert-danger" role="alert">
        {{ $errors->first('title') }}
      </div>
    @endif

    @if ($errors->has('content'))
      <div class="alert alert-danger" role="alert">
        {{ $errors->first('content') }}
      </div>
    @endif
    <form action="{{ route('notice.update', $notice->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label">제목</label>
        <input type="text" class="form-control" name="title" value="{{ old('title', $notice->title) }}">
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">내용</label>
        <textarea class="form-control" name="content" rows="30">{{ old('content', $notice->content) }}</textarea>
      </div>

      @can('notice')
      <input type="submit" class="btn btn-secondary float-end" value="작성하기" />
      @endcan
    </form>
  </section>    
  @include('layouts.footer')
</body>
</html>

