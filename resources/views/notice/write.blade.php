<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
<x-head.tinymce-config/>
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
    <form action="{{ url('/notice/write') }}" method="POST">
      @csrf
      <label for="title" class="form-label">제목</label>
      <input type="text" class="form-control" name="title" value="{{ old('title') }}">
      <x-forms.tinymce-editor>
      @section('tinymce-content')
      {{ old('content') }}
      @endsection
      </x-forms.tinymce-editor>
      @can('notice')
      <input type="submit" class="btn btn-secondary float-end" value="작성하기" />
      @endcan
    </form>
  </section>    
  @include('layouts.footer')
</body>
</html>

