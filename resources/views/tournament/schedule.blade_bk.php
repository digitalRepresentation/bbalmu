<!DOCTYPE html>
<html lang="en">
<head>
@section('title', '스타크래프트 빨무 3040 ClaN - 대회일정 캘린더')
@section('js-file')
    <script src="{{ asset('js/toastui-calendar.min.js') }}"></script>
@endsection
@section('css-file')
    <link href="{{ asset('css/toastui-calendar.min.css') }}" rel="stylesheet">
@endsection
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/core/locales-all.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
{{-- <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/core/main.min.css' rel='stylesheet' />
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/daygrid/main.min.css' rel='stylesheet' />
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/timegrid/main.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/core/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/daygrid/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/timegrid/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/interaction/main.min.js'></script> --}}
<link href='https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.min.css' rel='stylesheet' />
<link href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.min.css' rel='stylesheet' />
<link href='https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction/main.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'dayGrid', 'timeGrid', 'interaction' ],
    initialView: 'timeGridWeek',
    locale: 'ko' // 한국어 설정
    dateClick: function(info) {
      var title = prompt('Event Title:');
      var description = prompt('Event Description:');
      if (title) {
        calendar.addEvent({
          title: title,
          start: info.dateStr,
          description: description,
          allDay: info.allDay
        });
      }
    },
    eventClick: function(info) {
      alert('Event: ' + info.event.title + '\nDescription: ' + info.event.extendedProps.description);
    }
  });
  calendar.render();
});
</script>
@include('layouts.head')


</head>
<body>
@include('layouts.header')
<h4>스타크래프트 빨무 3040클랜 - 대회일정</h4>
<div id="app">
    <div id='calendar'></div>
</div>



@include('layouts.footer')
</body>
</html>

