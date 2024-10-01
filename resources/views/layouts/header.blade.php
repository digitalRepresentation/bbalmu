        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0 mb-5">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="/" class="navbar-brand p-0">
                    <!-- <h1 class="display-6 text-dark"><i class="fas fa-swimmer text-primary me-3"></i>빨무 3040</h1> -->
                    <img src="/img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">클랜안내</a>
                            <div class="dropdown-menu m-0">
                                <a href="/notice" class="dropdown-item">공지사항</a>
                                <a href="https://open.kakao.com/o/gkrsSKFd" class="dropdown-item">가입문의</a>
                                {{-- <a href="/" class="dropdown-item">클랜소개</a> --}}
                                {{-- <a href="/" class="dropdown-item">운영진소개</a> --}}
                            </div>
                        </div>
                        {{-- 
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">클랜전</a>
                            <div class="dropdown-menu m-0">
                                <a href="/" class="dropdown-item">클랜전신청</a>
                                <a href="/" class="dropdown-item">클랜전결과</a>
                                <a href="/" class="dropdown-item">대회결과</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">커뮤니티</a>
                            <div class="dropdown-menu m-0">
                                <a href="/" class="dropdown-item">자유게시판</a>
                                <a href="/" class="dropdown-item">유머게시판</a>
                                <a href="/" class="dropdown-item">빨무공략</a>
                                <a href="/" class="dropdown-item">밀리공략</a>
                            </div>
                        </div> --}}
                        <a href="/tiers" class="nav-item nav-link">3040티어</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">감독전</a>
                            <div class="dropdown-menu m-0">
                                <a href="/elo/stats" class="dropdown-item">ELO점수</a>
                                <a href="/elo/stats" class="dropdown-item">감독전승률</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">대회(작업중)</a>
                            <div class="dropdown-menu m-0">
                                {{-- <a href="/" class="dropdown-item">대회공지</a> --}}
                                <a href="/tournament/schedule" class="dropdown-item">대회일정(캘린더)</a>
                                <a href="/tournament/match-schedule" class="dropdown-item">대회일정(매치신청)</a>
                                <a href="/" class="dropdown-item">대회신청(준비중)</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">내전래더</a>
                            <div class="dropdown-menu m-0">
                                <a href="/ladder/notice" class="dropdown-item">래더공지</a>
                                <a href="/ladder/match-record" class="dropdown-item">점수기록지</a>
                                <a href="/ladder/tiers" class="dropdown-item">래더점수</a>
                            </div>
                        </div>
                        
                        {{-- <a href="/" class="nav-item nav-link">개인광고</a> --}}
                        <!-- <a href="service.html" class="nav-item nav-link">Service</a> -->
                        <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
                        
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Our Feature</a>
                                <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                                <a href="attraction.html" class="dropdown-item">Attractions</a>
                                <a href="package.html" class="dropdown-item">Ticket Packages</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                    </div>
                    <!-- <div class="team-icon d-none d-xl-flex justify-content-center me-3">
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                    <!-- <a href="/login" class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">로그인</a> -->
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    
                    
                    
                    <form method="POST" action="{{ route('logout') }}">
                        <span>{{ Auth::user()->name }}님 환영합니다.</span>
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('로그아웃') }}
                        </x-dropdown-link>

                        <a href="{{ route('profile.edit') }}" class="text-sm text-gray-700 underline">마이페이지</a>
                    </form>

                    
                        
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">로그인</a>

                        {{-- @if (Route::has('terms'))
                            <a href="{{ route('terms') }}" class="ml-4 text-sm text-gray-700 underline">회원가입</a>
                        @endif --}}
                    @endauth
                </div>
            @endif
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->
