<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
</head>
<body>
@include('layouts.header')
<div>
  <h4>스타크래프트 빨무 3040 티어표</h4>
</div>
<table class="table custom-table">
    <tr>
      {{-- <th scope="col">#</th> --}}
      <th scope="col">아이디</th>
      <th scope="col">티어</th>
      <th scope="col">종족</th>
    </tr>  
    @foreach($tiers as $tier)
      @switch($tier->tier)
        @case(1)
    <tr class="table-primary">
      <td>{{ $tier->starcraft_name }}</td>
      <td>{{ $tier->mastertier->tier_name }}</td>
      <td>{{ $tier->starcraft_race }}</td>
    </tr>
        @break
        @case(2)
    <tr class="table-warning">  
      <td>{{ $tier->starcraft_name }}</td>
      <td>{{ $tier->mastertier->tier_name }}</td>
      <td>{{ $tier->starcraft_race }}</td>
    </tr>
        @break
        @case(3)
    <tr class="table-success">
      <td>{{ $tier->starcraft_name }}</td>
      <td>{{ $tier->mastertier->tier_name }}</td>
     <td>{{ $tier->starcraft_race }}</td>      
    </tr>
        @break
        @case(4)
    <tr class="table-info">
      <td>{{ $tier->starcraft_name }}</td>
      <td>{{ $tier->mastertier->tier_name }}</td>
      <td>{{ $tier->starcraft_race }}</td>
    </tr>
        @break
        @case(5)
    <tr class="table-secondary">
      <td>{{ $tier->starcraft_name }}</td>
      <td>{{ $tier->mastertier->tier_name }}</td>
      <td>{{ $tier->starcraft_race }}</td>
    </tr>
        @break
        @case(6)
    <tr class="table-light">
      <td>{{ $tier->starcraft_name }}</td>
      <td>{{ $tier->mastertier->tier_name }}</td>
      <td>{{ $tier->starcraft_race }}</td>
    </tr>
        @break
        @case(7)
    <tr class="table-danger">
      <td>{{ $tier->starcraft_name }}</td>
      <td>{{ $tier->mastertier->tier_name }}</td>
      <td>{{ $tier->starcraft_race }}</td>
    </tr>
      @endswitch
    @endforeach
</table>

@include('layouts.footer')
</body>
</html>

