<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';

?>

<?php include __DIR__ . '/partials/head.php'; ?>

<body>
    <!--Full width header Start-->
    <div class="full-width-header">
        <?php include __DIR__ . '/partials/header.php'; ?>
    </div>
    <!--Full width header End-->

    <!-- Slider Section Start -->
    <div id="rs-slider" class="rs-slider home-slider slider-navigation">
        <div class="slider-carousel owl-carousel">
            <div class="single-slider">
                <div class="container">
                    <div class="text-part">
                        <h2 class="sub-title wow fadeInLeft" data-wow-delay="1s">Bienvenido al</h2>
                        <h1 class="title wow fadeInRight" data-wow-delay="1s">Club Deportivo <span class="primary-color">UPAO</span></h1>
                        <div class="desc wow fadeInLeft" data-wow-delay="1s">Registrate y realiza reservas para tu cancha de futbol favorita.</div>
                        <div class="slider-btn wow fadeInRight" data-wow-delay="1s">
                            <a class="readon" href="/reservas">Reservar</a>
                        </div>
                    </div>
                    <div class="fly-layer">
                        <div class="layer-image">
                            <div class="parallax-ball">
                                <img class="animate3" src="assets/images/slider/ball1.png" alt="img">
                            </div>
                            <div class="animate4">
                                <img src="assets/images/slider/h1-layer1.png" alt="Slider Layer Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slide2">
                <div class="container">
                    <div class="image-part common">
                        <div class="image-wrap">
                            <img class="player animate5" src="assets/images/slider/h1-layer2.png" alt="">
                            <img class="ball animate6" src="assets/images/slider/ball2.png" alt="">
                        </div>
                    </div>
                    <div class="text-part common">
                        <h2 class="sub-title">Bienvenido al</h2>
                        <h1 class="title"><span class="primary-color">Club Deportivo </span> UPAO</h1>
                        <div class="desc">Ven con tus amigos, no pierdas esta oportunidad!</div>
                        <div class="slider-btn">
                            <a class="readon" href="/reservas">Reservar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Campos Start -->
    <div id="tab-canchas" class="rs-products nav-style pt-92 md-pt-77">
        <div class="container">
            <div class="title-style text-center mb-50 md-mb-30">
                <h2 class="margin-0 uppercase">Campos deportivos</h2>
                <span class="line-bg y-b pt-10"></span>
            </div>
            <div class="rs-carousel owl-carousel mb-100 md-mb-80" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="true" data-md-device-dots="false">
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/1.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">Cancha A</a></h4>
                    <span class="product-price">
                        <span class="symbol">S/. </span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/2.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">Cancha B</a></h4>
                    <span class="product-price">
                        <span class="symbol">S/. </span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/3.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">Cancha C</a></h4>
                    <span class="product-price">
                        <span class="symbol">S/. </span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/4.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">Cancha D</a></h4>
                    <span class="product-price">
                        <span class="symbol">S/. </span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/5.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">Cancha E</a></h4>
                    <span class="product-price">
                        <span class="symbol">S/. </span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/6.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">Cancha F</a></h4>
                    <span class="product-price">
                        <span class="symbol">S/. </span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Campos End -->

    <!-- Upcomming Match & Video Section Start -->
    <div class="couter-and-upcomming pt-30 md-pt-80 mb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pr-0 col-padding-md md-mb-30">
                    <div class="rs-upcoming-match bg1 text-center">
                        <div class="title-style">
                            <h4 class="margin-0 white-color">Upcoming Match</h4>
                            <span class="line-bg pt-18 y-w"></span>
                        </div>
                        <div class="rs-countdown mt-45 md-mt-30">
                            <div id="countdown" class="countdown"></div>
                        </div>
                        <div class="teams mt-25 md-mt-50">
                            <div class="row rs-vertical-middle">
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div class="team-logo">
                                        <img class="size-80" src="assets/images/team-logo/1.png" alt="Valencia">
                                        <div class="name white-color">Valencia</div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div class="versase">VS</div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-4">
                                    <div class="team-logo">
                                        <img class="size-80" src="assets/images/team-logo/2.png" alt="Real Sociedad">
                                        <div class="name white-color">Real Sociedad</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="match-info mt-28">
                            <ul>
                                <li>Mestalla Stadium</li>
                                <li>August 14, 2020</li>
                            </ul>
                            <div class="time pt-15 white-color">19:00:00</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-30 col-padding-md">
                    <div class="rs-video big-space bg2 bdru-4 text-center">
                        <div class="video-contents">
                            <a class="popup-videos play-btn" href="https://www.youtube.com/watch?v=t17O6JoU2Ew"><i class="fa fa-play"></i></a>
                            <h3 class="title white-color mt-18 mb-0">Last Match Highlights</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Upcomming Match & Video Section End -->

    <!-- Match Result Section Start -->
    <div class="rs-match-result style1 nav-style pb-100 md-pb-80">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Camp Nou Stadium</div>
                            <div class="date">April 04, 2020</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/8.png" alt="Manchester City">
                                <div class="name">Manchester City</div>
                            </div>
                            <div class="score">1-2</div>
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/9.png" alt="Barcelona">
                                <div class="name">Barcelona</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Stamford Bridge</div>
                            <div class="date">April 04, 2020</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/8.png" alt="Manchester City">
                                <div class="name">Manchester City</div>
                            </div>
                            <div class="score">1-0</div>
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/10.png" alt="Chelsea">
                                <div class="name">Chelsea</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Central Olympic Stadium</div>
                            <div class="date">May 17, 2020</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/2.png" alt="Real Sociedad">
                                <div class="name">Real Sociedad</div>
                            </div>
                            <div class="score">2-2</div>
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/3.png" alt="Liverpool">
                                <div class="name">Atletico Madrid</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Central Olympic Stadium</div>
                            <div class="date">April 09, 2020</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/4.png" alt="Real Madrid">
                                <div class="name">Real Madrid</div>
                            </div>
                            <div class="score">3-3</div>
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/3.png" alt="Liverpool">
                                <div class="name">Manchester City</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Wanda Metropolitano Stadium</div>
                            <div class="date">April 01, 2020</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/5.png" alt="Manchester Unt">
                                <div class="name">Manchester Unt</div>
                            </div>
                            <div class="score">2-3</div>
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/6.png" alt="Atletico Madrid">
                                <div class="name">Atletico Madrid</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Mestalla Stadium</div>
                            <div class="date">April 05, 2020</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/5.png" alt="Manchester Unt">
                                <div class="name">Manchester Unt</div>
                            </div>
                            <div class="score">3-3</div>
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/1.png" alt="Valencia">
                                <div class="name">Valencia</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Central Olympic Stadium</div>
                            <div class="date">April 02, 2020</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/5.png" alt="Manchester Unt">
                                <div class="name">Manchester Unt</div>
                            </div>
                            <div class="score">3-2</div>
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/3.png" alt="Liverpool">
                                <div class="name">Liverpool</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Emirates Stadium</div>
                            <div class="date">April 02, 2020</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/5.png" alt="Manchester Unt">
                                <div class="name">Manchester Unt</div>
                            </div>
                            <div class="score">2-1</div>
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/7.png" alt="Arsenal">
                                <div class="name">Arsenal</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Etihad Stadium</div>
                            <div class="date">April 05, 2020</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/8.png" alt="Manchester City">
                                <div class="name">Manchester City</div>
                            </div>
                            <div class="score">4-1</div>
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/1.png" alt="Valencia">
                                <div class="name">Valencia</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <div class="vanues">
                            <div class="stadium">Wanda Metropolitano Stadium</div>
                            <div class="date">April 04, 2020</div>
                        </div>
                        <div class="teams">
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/8.png" alt="Manchester City">
                                <div class="name">Manchester City</div>
                            </div>
                            <div class="score">3-1</div>
                            <div class="logo">
                                <img class="size-80" src="assets/images/team-logo/6.png" alt="Atletico Madrid">
                                <div class="name">Atletico Madrid</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Match Result Section End -->

    <!-- Match Gallery Start -->
    <div class="rs-gallery style1 pt-92 pb-100 md-pt-72 md-pb-80">
        <div class="container">
            <div class="title-style text-center mb-50 md-mb-30">
                <h2 class="margin-0 uppercase">Match Gallery</h2>
                <span class="line-bg y-b pt-10"></span>
            </div>
            <div class="row pl-15 pr-15">
                <div class="col-lg-4 col-md-6 padding-0 sm-mb-30">
                    <div class="gallery-grid">
                        <img src="assets/images/gallery/1.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="assets/images/gallery/1.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0 sm-mb-30">
                    <div class="gallery-grid">
                        <img src="assets/images/gallery/2.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="assets/images/gallery/2.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0 sm-mb-30">
                    <div class="gallery-grid">
                        <img src="assets/images/gallery/3.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="assets/images/gallery/3.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0 sm-mb-30">
                    <div class="gallery-grid">
                        <img src="assets/images/gallery/4.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="assets/images/gallery/4.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0 sm-mb-30">
                    <div class="gallery-grid">
                        <img src="assets/images/gallery/5.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="assets/images/gallery/5.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-0">
                    <div class="gallery-grid">
                        <img src="assets/images/gallery/6.jpg" alt="Gallery Image">
                        <a class="image-popup view-btn" href="assets/images/gallery/6.jpg">
                            <i class="flaticon-add-circular-button"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Match Gallery End -->

    <!-- Champion Awards Start -->
    <div class="rs-awards bg6 pt-92 pb-100 md-pt-72 md-pb-80">
        <div class="container">
            <div class="title-style text-center mb-50 md-mb-30">
                <h2 class="margin-0 uppercase white-color">Champion Awards</h2>
                <span class="line-bg y-w pt-10"></span>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                <div class="item">
                    <div class="award-wrap">
                        <div class="champion-logo">
                            <img src="assets/images/award/1.png" alt="">
                        </div>
                        <div class="champion-details">
                            <div class="year-details">
                                <h3>UEFA Champions League</h3>
                            </div>
                            <div class="champion-no">05</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="award-wrap">
                        <div class="champion-logo">
                            <img src="assets/images/award/2.png" alt="">
                        </div>
                        <div class="champion-details">
                            <div class="year-details">
                                <h3>UEFA Europa League</h3>
                            </div>
                            <div class="champion-no">07</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="award-wrap">
                        <div class="champion-logo">
                            <img src="assets/images/award/3.png" alt="">
                        </div>
                        <div class="champion-details">
                            <div class="year-details">
                                <h3>UEFA Super Cup</h3>
                            </div>
                            <div class="champion-no">06</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="award-wrap">
                        <div class="champion-logo">
                            <img src="assets/images/award/4.png" alt="">
                        </div>
                        <div class="champion-details">
                            <div class="year-details">
                                <h3>FIFA Club World Cup</h3>
                            </div>
                            <div class="champion-no">03</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Champion Awards End -->

    <?php include __DIR__ . '/partials/footer.php'; ?>
</body>

</html>