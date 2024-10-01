<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
<x-head.tinymce-config/>
</head>
<body>
@include('layouts.header')
  <section class="p-5 mx-auto w-75">
    <h3 class="ms-3">■공지사항</h3>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success')  }}
    </div>
    @endif
    <table class="table">
        <thead>
          <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">제목</th>
            <th scope="col">작성자</th>
            <th scope="col">작성날짜</th>
            <th scope="col">조회</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($notices as $notice)
          <tr>
            <th>{{ $notice->id }}</th>
            <td><a href="/notice/{{ $notice->id }}">{{ $notice->title }}</a></td>
            <td>{{ $notice->user->name }}</td>
            <td>{{ \Carbon\Carbon::parse($notice->created_at)->format('Y-m-d') }}</td>
            <td>{{ $notice->views }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

      {{ $notices->links('pagination::bootstrap-4') }}
      @can('notice')
      <a href="notice/create" class="btn btn-secondary float-end">글쓰기</a>
      @endcan
  </section>    
  @include('layouts.footer')
</body>
</html>

