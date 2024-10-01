<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
@include('layouts.header')
<div>
  <h4>스타크래프트 빨무 3040 래더점수표 (모바일은 깨집니다)</h4>
</div>
<table class="table custom-table">
    <tr>
      {{-- <th scope="col">#</th> --}}
      <th scope="col">아이디</th>
      <th scope="col">티어</th>
      <th scope="col">점수</th>
      <th scope="col">PPP</th>
      <th scope="col">PPT</th>
      <th scope="col">PPZ</th>
      <th scope="col">PTZ</th>
    </tr>  
    @foreach($tiers as $tier)
    <tr class="table">
      <td>{{ $tier->starcraft_name }}</td>
      <td>{{ $tier->mastertier->tier_name }}</td>
      <td>{{ $tier->ladder_score }}</td>
      <td>{{ $tier->matchscorerecord->ppp_win }}승 {{ $tier->matchscorerecord->ppp_lose }}패</td>
      <td>{{ $tier->matchscorerecord->ppt_win }}승 {{ $tier->matchscorerecord->ppt_lose }}패</td>
      <td>{{ $tier->matchscorerecord->ppz_win }}승 {{ $tier->matchscorerecord->ppz_lose }}패</td>
      <td>{{ $tier->matchscorerecord->ptz_win }}승 {{ $tier->matchscorerecord->ptz_lose }}패</td>
    </tr>
    @endforeach
</table>

@include('layouts.footer')
</body>
</html>

