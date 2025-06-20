<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.head')
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('layouts.header')

        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item">
                <img src="img/top/tier.png" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container align-items-center py-4">
                        <div class="row g-5 align-items-center">
                            <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">스타크래프트 빨무 3040-CLAN 티어</h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">3040 클랜의 티어 정보</h1>
                                    <p class="mb-4 fs-5">3040 클랜은 S티어부터 3군까지 다양한 유저들이 포함되어 있습니다. 
                                        각 티어는 플레이어의 실력과 경험을 반영하여 세심하게 분류되었으며, 
                                        이를 통해 모든 유저가 자신의 수준에 맞는 경쟁을 즐길 수 있습니다. 
                                        클랜 내에서의 티어 시스템은 공정한 경쟁 환경을 조성하고, 
                                        모든 참가자가 자신의 실력을 충분히 발휘할 수 있도록 돕습니다.
                                    </p>
                                    <div class="d-flex flex-shrink-0">
                                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="/tiers">티어정보</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item">
                <img src="img/top/elo.png" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5 align-items-center">
                            <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">스타크래프트 빨무 3040-CLAN ELO시스템</h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4">감독전 및 대회 전적 기록의 종합적 합산</h1>
                                    <p class="mb-4 fs-5">각 티어 간의 가중치를 세심하게 조정하여, 모든 플레이어가 공정하고 균형 잡힌 점수를 받을 수 있도록 하였습니다. 
                                        이를 통해 게임의 경쟁력을 높이고, 모든 참가자가 자신의 실력을 충분히 발휘할 수 있는 환경을 조성하였습니다. 
                                        또한, ELO 시스템을 도입하여 플레이어들의 전적을 체계적으로 관리하고, 보다 정확한 실력 평가가 가능하도록 하였습니다. 
                                        이러한 노력은 궁극적으로 게임 커뮤니티의 활성화와 지속적인 발전에 기여할 것입니다.
                                    </p>
                                    <div class="d-flex flex-shrink-0">
                                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="/elo/stats">ELO전적</a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-xl-5 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="ticket-form p-5">
                                    <h2 class="text-dark text-uppercase mb-4">book your ticket</h2>
                                    <form>
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <input type="text" class="form-control border-0 py-2" id="name" placeholder="Your Name">
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <input type="email" class="form-control border-0 py-2" id="email" placeholder="Your Email">
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <input type="phone" class="form-control border-0 py-2" id="phone" placeholder="Phone">
                                            </div>
                                            <div class="col-12">
                                                <select class="form-select border-0 py-2" aria-label="Default select example">
                                                    <option selected>Select Packages</option>
                                                    <option value="1">Family Packages</option>
                                                    <option value="2">Basic Packages</option>
                                                    <option value="3">Premium Packages</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <input class="form-control border-0 py-2" type="date">
                                            </div>
                                            <div class="col-12">
                                                <input type="number" class="form-control border-0 py-2" id="number" placeholder="Guest">
                                            </div>
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary w-100 py-2 px-5">Book Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>   --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item">
                            <img src="img/top/clan_intro_2.jpg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">클랜 소개</h4>
                                    <p class="text-white">3040은 빨무계에서 긴 전통을 가지고 있는 클랜입니다. 운영진 소개를 비롯한 클랜 소개를 안내하겠습니다.
                                    </p>
                                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item">
                            <img src="img/top/league_intro_2.jpg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">대회 정보</h4>
                                    <p class="text-white">한 두달에 한번씩 대회를 진행합니다. 주최자 측에서 상품을 거는 경우가 있습니다. 1:1, 2:2, 3:3등 다양합니다.
                                    </p>
                                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item">
                            <img src="img/top/3040_rule_2.jpg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">빨무 3040클랜 룰</h4>
                                    <p class="text-white">클랜 내에서 진행하는 대회 혹은 내전 진행 시의 룰을 안내 하겠습니다. 프프프전, 잡전마다 다르니 참고 바랍니다. 
                                    </p>
                                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- 여기서부터 수정 필요 -->

        <!-- About Start -->
        <div class="container-fluid about pb-5">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary">About Waterland</h4>
                            <h1 class="display-5 mb-4">The Best Theme & Amusement Park For Your Family</h1>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis eligendi illum inventore maiores incidunt vero id. Est ipsam, distinctio veritatis earum inventore ab fugit officiis ut ullam, laudantium facere sapiente?
                            </p>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="me-3"><i class="fas fa-glass-cheers fa-3x text-primary"></i></div>
                                        <div>
                                            <h4>Food & Drinks</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="me-3"><i class="fas fa-dot-circle fa-3x text-primary"></i></div>
                                        <div>
                                            <h4>Many Attractions</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="me-3"><i class="fas fa-hand-holding-usd fa-3x text-primary"></i></div>
                                        <div>
                                            <h4>Affordable Price</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="me-3"><i class="fas fa-lock fa-3x text-primary"></i></div>
                                        <div>
                                            <h4>Safety Lockers</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="position-relative rounded">
                            <div class="rounded" style="margin-top: 40px;">
                                <div class="row g-0">
                                    <div class="col-lg-12">
                                        <div class="rounded mb-4">
                                            <img src="img/about.jpg" class="img-fluid rounded w-100" alt="">
                                        </div>
                                        <div class="row gx-4 gy-0">
                                            <div class="col-6">
                                                <div class="counter-item bg-primary rounded text-center p-4 h-100">
                                                    <div class="counter-item-icon mx-auto mb-3">
                                                        <i class="fas fa-thumbs-up fa-3x text-white"></i>
                                                    </div>
                                                    <div class="counter-counting mb-3">
                                                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">150</span>
                                                        <span class="h1 fw-bold text-white">K +</span>
                                                    </div>
                                                    <h5 class="text-white mb-0">Happy Visitors</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="counter-item bg-dark rounded text-center p-4 h-100">
                                                    <div class="counter-item-icon mx-auto mb-3">
                                                        <i class="fas fa-certificate fa-3x text-white"></i>
                                                    </div>
                                                    <div class="counter-counting mb-3">
                                                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">122</span>
                                                        <span class="h1 fw-bold text-white"> +</span>
                                                    </div>
                                                    <h5 class="text-white mb-0">Awwards Winning</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded bg-primary p-4 position-absolute d-flex justify-content-center" style="width: 90%; height: 80px; top: -40px; left: 50%; transform: translateX(-50%);">
                                <h3 class="mb-0 text-white">20 Years Experiance</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container service-section py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Service</h4>
                    <h1 class="display-5 text-white mb-4">Explore Waterland Park service</h1>
                    <p class="mb-0 text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
                    <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-days p-4">
                            <div class="py-2 border-bottom border-top d-flex align-items-center justify-content-between flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">Monday - Friday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>11:00 AM - 16:00 PM</p></div>
                            <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">Saturday - Sunday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 17:00 PM</p></div>
                            <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap"><h4 class="mb-0">Holiday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 17:00 PM</p></div>
                        </div>
                    </div>
                    <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>

                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-home fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Private Gazebo</a>
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-utensils fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Delicious Food</a>
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-door-closed fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Safety Lockers</a>
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-swimming-pool fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">River Rides</a>
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet vel beatae numquam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Ticket Packages Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="packages-item h-100">
                            <h4 class="text-primary">Ticket Packages</h4>
                            <h1 class="display-5 mb-4">Choose The Best Packages For Your Family</h1>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                            </p>
                            <p><i class="fa fa-check text-primary me-2"></i>Best Waterpark in the world</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Best Packages For Your Family</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Enjoy Various Kinds of Water Park</p>
                            <p class="mb-5"><i class="fa fa-check text-primary me-2"></i>Win Up To 3 Free All Day Tickets</p>
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-5"> Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-item bg-dark rounded text-center p-5 h-100">
                            <div class="pb-4 border-bottom">
                                <h2 class="mb-4 text-primary">Family Packages</h2>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, dolorum!</p>
                                <h2 class="mb-0 text-primary">$260,90<span class="text-body fs-5 fw-normal">/family</span></h2>
                            </div>
                            <div class="py-4">
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>All Access To Waterpark</p>
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>Get Two Gazebo</p>
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>Free Soft Drinks</p>
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>Get Four Lockers</p>
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>Free Four Towels</p>
                            </div>
                            <a href="#" class="btn btn-light rounded-pill py-3 px-5"> Book Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="pricing-item bg-primary rounded text-center p-5 h-100">
                            <div class="pb-4 border-bottom">
                                <h2 class="text-dark mb-4">Basic Packages</h2>
                                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, dolorum!</p>
                                <h2 class="text-dark mb-0">$60,90<span class="text-white fs-5 fw-normal">/person</span></h2>
                            </div>
                            <div class="text-white py-4">
                                <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Get Small Gazebo</p>
                                <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Free Soft Drink</p>
                                <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Get One Locker</p>
                                <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Free Towel</p>
                            </div>
                            <a href="#" class="btn btn-dark rounded-pill py-3 px-5"> Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ticket Packages End -->


        <!-- Attractions Start -->
        <div class="container-fluid attractions py-5">
            <div class="container attractions-section py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Attractions</h4>
                    <h1 class="display-5 text-white mb-4">Explore WaterLand Park Attractions</h1>
                    <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="owl-carousel attractions-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/attraction-1.jpg" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Roller Coaster</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.4s">
                        <img src="img/attraction-2.jpg" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Carousel</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.6s">
                        <img src="img/attraction-3.jpg" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Arcade Game</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.8s">
                        <img src="img/attraction-4.jpg" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Hanging Carousel</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="1s">
                        <img src="img/attraction-2.jpg" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Carousel</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Attractions End -->

        <!-- Gallery Start -->
        <div class="container-fluid gallery pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Gallery</h4>
                    <h1 class="display-5 mb-4">Captured Moments In Waterland</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="gallery-item">
                            <img src="img/gallery-1.jpg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/gallery-1.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-1"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="gallery-item">
                            <img src="img/gallery-2.jpg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/gallery-2.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-2"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="gallery-item">
                            <img src="img/gallery-3.jpg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/gallery-3.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-3"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="gallery-item">
                            <img src="img/gallery-4.jpg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/gallery-4.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-4"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="gallery-item">
                            <img src="img/gallery-5.jpg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/gallery-5.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-5"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="gallery-item">
                            <img src="img/gallery-6.jpg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/gallery-6.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-6"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End -->


        <!-- Blog Start -->
        <div class="container-fluid blog pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Blog</h4>
                    <h1 class="display-5 mb-4">Latest Blog & Articles</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="#">
                                    <img src="img/blog-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                </a>
                                <div class="blog-category py-2 px-4">Vacation</div>
                                <div class="blog-date"><i class="fas fa-clock me-2"></i>August 19, 2025</div>
                            </div>
                            <div class="blog-content p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Why Children Dont Like Getting Out Of The Water</a>
                                <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam aspernatur nam quidem porro sapiente, neque a quibusdam....
                                </p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="#">
                                    <img src="img/blog-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                </a>
                                <div class="blog-category py-2 px-4">Insight</div>
                                <div class="blog-date"><i class="fas fa-clock me-2"></i>August 19, 2025</div>
                            </div>
                            <div class="blog-content p-4">
                                <a href="#" class="h4 d-inline-block mb-4">5 Ways To Enjoy Waterland This Spring Break</a>
                                <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam aspernatur nam quidem porro sapiente, neque a quibusdam....
                                </p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="#">
                                    <img src="img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                                </a>
                                <div class="blog-category py-2 px-4">Insight</div>
                                <div class="blog-date"><i class="fas fa-clock me-2"></i>August 19, 2025</div>
                            </div>
                            <div class="blog-content p-4">
                                <a href="#" class="h4 d-inline-block mb-4">3 Tips for Your Family Spring Break at Amusement Park</a>
                                <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam aspernatur nam quidem porro sapiente, neque a quibusdam....
                                </p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Team Start -->
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Meet Our Team</h4>
                    <h1 class="display-5 mb-4">Our Waterland Park Dedicated Team Member</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0">David James</h4>
                                        <p class="mb-0">Profession</p>
                                    </div>
                                    <div>
                                        <img src="img/team-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam eveniet itaque provident sequi deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0">William John</h4>
                                        <p class="mb-0">Profession</p>
                                    </div>
                                    <div>
                                        <img src="img/team-2.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam eveniet itaque provident sequi deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0">Michael John</h4>
                                        <p class="mb-0">Profession</p>
                                    </div>
                                    <div>
                                        <img src="img/team-3.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam eveniet itaque provident sequi deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonials</h4>
                    <h1 class="display-5 text-white mb-4">Our Clients Riviews</h1>
                    <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item p-4">
                        <p class="text-white fs-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos mollitia fugiat, nihil autem reprehenderit aperiam maxime minima consequatur, nam iste eius velit perferendis voluptatem at atque neque soluta reiciendis doloremque.
                        </p>
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="img/testimonial-1.jpg" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p class="text-start text-white">Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item p-4">
                        <p class="text-white fs-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos mollitia fugiat, nihil autem reprehenderit aperiam maxime minima consequatur, nam iste eius velit perferendis voluptatem at atque neque soluta reiciendis doloremque.
                        </p>
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p class="text-start text-white">Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item p-4">
                        <p class="text-white fs-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos mollitia fugiat, nihil autem reprehenderit aperiam maxime minima consequatur, nam iste eius velit perferendis voluptatem at atque neque soluta reiciendis doloremque.
                        </p>
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p class="text-start text-white">Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <a href="index.html" class="p-0">
                                <h4 class="text-white mb-4"><i class="fas fa-swimmer text-primary me-3"></i>WaterLand</h4>
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            </a>
                            <p class="mb-2">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="text-white mb-0">123 Street New York.USA</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <p class="text-white mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="text-white mb-0">(+012) 3456 7890</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Support</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Opening Hours</h4>
                            <div class="opening-date mb-3 pb-3">
                                <div class="opening-clock flex-shrink-0">
                                    <h6 class="text-white mb-0 me-auto">Monday - Friday:</h6>
                                    <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 11:00 AM - 16:00 PM</p>
                                </div>
                                <div class="opening-clock flex-shrink-0">
                                    <h6 class="text-white mb-0 me-auto">Satur - Sunday:</h6>
                                    <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 09:00 AM - 17:00 PM</p>
                                </div>
                                <div class="opening-clock flex-shrink-0">
                                    <h6 class="text-white mb-0 me-auto">Holiday:</h6>
                                    <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 09:00 AM - 17:00 PM</p>
                                </div>
                            </div>
                            <div>
                                <p class="text-white mb-2">Payment Accepted</p>
                                <img src="img/payment.png" class="img-fluid" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        @include('layouts.footer')
    </body>

</html>