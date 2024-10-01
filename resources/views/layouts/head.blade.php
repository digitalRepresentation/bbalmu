    <meta charset="utf-8">
    <title>@yield('title', '스타크래프트 빨무 커뮤니티 - 3040 CLAN')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="스타크래프트 길드, 스타크래프트 클랜, 스타크래프트 빨무, 빠른무한, 빨무고수, 브신, 인피쉰, 내전, 감독전, 청백전" name="keywords">
    <meta name="description" content="@yield('description', '스타크래프트 빠른무한 빨무 아재 3040 클랜입니다. 내전, 공방, 각종 대회, 빨무 공략 등을 알려드리고 있습니다.')">

    <!-- 파비콘 링크 추가 -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">

    @yield('css-file')
    @yield('js-file')