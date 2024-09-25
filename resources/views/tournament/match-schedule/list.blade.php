<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
@include('layouts.header')
  <section class="p-5 mx-auto w-75">
    <h3 class="ms-3">■대회매치 신청게시판</h3>
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
            <th scope="col">매치일</th>
            <th scope="col">작성날짜</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($events as $event)
          <tr>
            <th>{{ $event->id }}</th>
            {{-- <a href="/tournament/match-schedule/{{ $event->id }}"> --}}
            <td>{{ $event->title }}</a></td>
            <td>{{ $event->user->name }}</td>
            <td>{{ $event->start }}</td>
            <td>{{ \Carbon\Carbon::parse($event->created_at)->format('Y-m-d') }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @can('notice')
      <a href="/tournament/match-schedule/create" class="btn btn-secondary float-end">일정작성</a>
      @endcan
  </section>    
  @include('layouts.footer')
</body>
</html>

