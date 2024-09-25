<!DOCTYPE html>
<html lang="en">
<head>
@section('title', '스타크래프트 빨무 3040 ClaN - 대회일정 캘린더')
@section('css-file')
    <link href="{{ asset('css/fullcalendar-custom.css') }}" rel="stylesheet">
@endsection
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/core/locales-all.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
{{-- <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/locales/ko.js'></script> --}}
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var initialView = window.innerWidth < 768 ? 'timeGridDay' : 'dayGridMonth';
    
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: initialView,
      events: '/events',
      headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        }
    });
    calendar.render();

    window.addEventListener('resize', function() {
        var newView = window.innerWidth < 768 ? 'timeGridDay' : 'dayGridMonth';
        calendar.changeView(newView);
      });
  });

  
</script>

@include('layouts.head')


</head>
<body>
@include('layouts.header')
<h4>스타크래프트 빨무 3040클랜 - 대회일정</h4>
    <div id='calendar'></div>



@include('layouts.footer')
</body>
</html>

