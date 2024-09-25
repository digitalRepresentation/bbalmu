<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
@include('layouts.header')
  <section class="mx-auto border border-light">
    <h3 class="ms-3">■대회매치 신청게시판(글쓰기)</h3>
    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        @if ($errors->has('title'))
        ● {{ $errors->first('title') }} <br>
        @endif
        @if ($errors->has('content'))
        ● {{ $errors->first('content') }} <br>
        @endif
        @if ($errors->has('match_date'))
        ● {{ $errors->first('match_date') }} <br>
      @endif
      </div>
    @endif
    <form action="{{ url('/tournament/match-schedule') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">제목</label>
        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">내용</label>
        <textarea class="form-control" name="content" rows="5">{{ old('content') }}</textarea>
      </div>
      <div class="mb-3">
        <label for="match_date" class="form-label">매치일</label>
        <input type="datetime-local" class="form-control" name="match_date" value="{{ old('match_date') }}">
      </div>

      @can('notice')
      <input type="submit" class="btn btn-secondary float-end" value="작성하기" />
      @endcan
    </form>
  </section>    
  @include('layouts.footer')
</body>
</html>

