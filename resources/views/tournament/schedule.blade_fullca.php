<!DOCTYPE html>
<html lang="en">
<head>
@section('title', '스타크래프트 빨무 3040 ClaN - 대회일정 캘린더')
{{-- @section('js-file')
    <script src="{{ asset('js/toastui-calendar.min.js') }}"></script>
@endsection
@section('css-file')
    <link href="{{ asset('css/toastui-calendar.min.css') }}" rel="stylesheet">
@endsection --}}
<link rel="stylesheet" href="https://uicdn.toast.com/calendar/latest/toastui-calendar.min.css">
<script src="https://uicdn.toast.com/calendar/latest/toastui-calendar.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const calendar = new tui.Calendar('#calendar', {
            defaultView: 'month',
            useCreationPopup: true,
            useDetailPopup: true,
        });

        calendar.on('beforeCreateSchedule', function(event) {
            // 일정 생성 로직
            console.log('Create schedule', event);
        });

        calendar.on('beforeUpdateSchedule', function(event) {
            // 일정 수정 로직
            console.log('Update schedule', event);
        });
      });
    </script>
@include('layouts.head')


</head>
<body>
@include('layouts.header')
<h4>스타크래프트 빨무 3040클랜 - 대회일정</h4>
<div id='calendar' style="height:800px"></div>



@include('layouts.footer')
</body>
</html>

