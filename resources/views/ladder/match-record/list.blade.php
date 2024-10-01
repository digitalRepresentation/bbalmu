<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
@include('layouts.header')
  <section class="p-5 mx-auto w-75">
    <h3 class="ms-3">■래더전적기록</h3>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success')  }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif



    <table class="table">
        <thead>
          <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">제목</th>
            <th scope="col">작성자</th>
            <th scope="col">작성날짜</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($matchRecords as $matchRecord)
          <tr>
            <th>{{ $matchRecord->id }}</th>
            <td><a href="/ladder/match-record/{{ $matchRecord->id }}">{{ $matchRecord->player1_id }},{{ $matchRecord->player2_id }}, {{ $matchRecord->player3_id }} vs {{ $matchRecord->player4_id }}, {{ $matchRecord->player5_id }}, {{ $matchRecord->player6_id }} {{ $matchRecord->winning_team }}팀 승 </a></td>
            <td>{{ $matchRecord->user->name }}</td>
            <td>{{ \Carbon\Carbon::parse($matchRecord->created_at)->format('Y-m-d') }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $matchRecords->links('pagination::bootstrap-4') }}
      @can('notice')
      <a href="/ladder/match-record/create" class="btn btn-secondary float-end">래더기록작성</a>
      @endcan
  </section>    
  @include('layouts.footer')
</body>
</html>

