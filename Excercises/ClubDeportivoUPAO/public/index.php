<?php

declare(strict_types=1);

require __DIR__ . '/../src/App/App.php';


use App\Controladores\UsuarioControlador;
use App\Modelos\Usuario;
use App\Vistas\UsuarioVista;
use App\AccesoDatos\UsuarioDAO;

include __DIR__ . '/../src/Controladores/UsuarioControlador.php';
include __DIR__ . '/../src/Modelos/Usuario.php';
include __DIR__ . '/../src/Vistas/UsuarioVista.php';
include __DIR__ . '/../src/AccesoDatos/UsuarioDAO.php';

//test
$usuarioModel = retrieveUsuarioFromDatabase();

$usuarioVista = new UsuarioVista();

$usuarioControlador = new UsuarioControlador($usuarioModel, $usuarioVista);
$usuarioControlador->updateVista();
$usuarioControlador->setUsuarioNombre("Fernando");
$usuarioControlador->updateVista();

function retrieveUsuarioFromDatabase()
{
    /* $usuario = new Usuario();
    $usuario->setDNI("12345678");
    return $usuario; */
    $usuario = new UsuarioDAO();
    return $usuario->getUsuario("12345678");
}

?>

<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Club Deportivo | UPAO</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- bootstrap v4 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/rsmenu-main.css">
    <!-- swiper slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/swiper.min.css">
    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/rsmenu-transitions.css">
    <!-- rsanimations CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/rsanimations.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <!-- rs-spaceing css -->
    <link rel="stylesheet" type="text/css" href="assets/css/rs-spaceing.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
    <!--Preloader area start here-->
    <div id="loading" class="loading">
        <div class="rs-loader">
            <div class="rs-shadow"></div>
            <div class="rs-gravity">
                <div class="rs-ball"></div>
            </div>
        </div>
    </div>
    <!--Preloader area End here-->

    <!--Full width header Start-->
    <div class="full-width-header">
        <!--Header Start-->
        <header id="rs-header" class="rs-header homestyle">
            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container-fluid">
                    <div class="row rs-vertical-middle">
                        <div class="col-lg-2">
                            <div class="logo-area">
                                <a href="/"><img src="assets/images/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-10 mobile-menu-area">
                            <div class="rs-menu-area display-flex-center">
                                <div class="main-menu">
                                    <a class="rs-menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <nav class="rs-menu">
                                        <div class="expand-btn">
                                            <span>
                                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </span>
                                            <span>
                                                <a id="nav-expander" class="nav-expander">
                                                    <ul class="offcanvas-icon">
                                                        <li>
                                                            <span class="cancha1"></span>
                                                            <span class="cancha2"></span>
                                                            <span class="cancha3"></span>
                                                        </li>
                                                    </ul>
                                                </a>
                                            </span>
                                        </div>
                                        <ul class="nav-menu text-right">
                                            <!-- Inicio -->
                                            <li class="current-menu-item current_page_item menu-item-has-children"> <a href="/" class="home">Inicio</a></li>
                                            <!-- End Inicio -->

                                            <!-- Registro Menu Start -->
                                            <li class="rs-mega-menu mega-rs menu-item-has-children"> <a href="#">Registro</a></li>
                                            <!-- Registro Menu End -->

                                            <!-- Reservas Menu Start -->
                                            <li class="menu-item-has-children"><a href="#">Reservas</a></li>
                                            <!-- Reservas Menu End -->

                                            <!--Resultados Menu Start -->
                                            <li><a href="result.html">Resultados</a></li>
                                            <!--Resultados Menu End -->

                                            <!--Puntajes Start-->
                                            <li><a href="point-table.html">Puntajes</a></li>
                                            <!--Puntajes End-->

                                            <!--Noticias Start-->
                                            <li class="menu-item-has-children"> <a href="#tab-noticias">Noticias</a></li>
                                            <!--Noticias Table End-->
                                        </ul> <!-- //.nav-menu -->
                                    </nav>
                                </div> <!-- //.main-menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->

            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn"><span id="nav-close" class="text-center"><i class="flaticon-cross"></i></span></div>
                <div class="canvas-logo">
                    <a href="index-2.html"><img src="assets/images/logo-dark.png" alt="logo"></a>
                </div>
                <div class="sidebarnav_menu">
                    <ul>
                        <li class="active"><a href="index-2.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="match-fixtures.html">Match Fixtures</a></li>
                        <li><a href="blog.html">News</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="canvas-contact">
                    <h5 class="canvas-contact-title">Contact Info</h5>
                    <ul class="contact">
                        <li><i class="fa fa-globe"></i>New York, USA</li>
                        <li><i class="fa fa-phone"></i><a href="tel:+125427263512">+125427263512</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:support@rstheme.com">support@rstheme.com</a></li>
                    </ul>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </header>
        <!--Header End-->
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
                        <h2 class="sub-title">Best Soccer</h2>
                        <h1 class="title"><span class="primary-color">Html</span> Template</h1>
                        <div class="desc">We denounce with righteous indignation and dislike men who are so beguiled <br> and demoralized by the charms of pleasure of the moment.</div>
                        <div class="slider-btn">
                            <a class="readon" href="#">Buy Now !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Upcomming Match & Video Section Start -->
    <div class="couter-and-upcomming pt-100 md-pt-80 mb-30">
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
                                <li>August 14, 2019</li>
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
                            <div class="date">April 04, 2019</div>
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
                            <div class="date">April 04, 2019</div>
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
                            <div class="date">May 17, 2019</div>
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
                            <div class="date">April 09, 2019</div>
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
                            <div class="date">April 01, 2019</div>
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
                            <div class="date">April 05, 2019</div>
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
                            <div class="date">April 02, 2019</div>
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
                            <div class="date">April 02, 2019</div>
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
                            <div class="date">April 05, 2019</div>
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
                            <div class="date">April 04, 2019</div>
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

    <!-- Latest News Section Start -->
    <div id="tab-noticias" class="rs-lates-news sec-bg pt-91 pb-100 md-pt-70 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 md-mb-72">
                    <div class="title-style mb-50 md-mb-30">
                        <h2 class="margin-0 uppercase">Latest News</h2>
                        <span class="line-bg left-line y-b pt-10"></span>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-30">
                            <div class="latest-news-grid">
                                <div class="news-img">
                                    <a href="#"><img src="assets/images/latest-news/1.jpg" alt="News Image"></a>
                                </div>
                                <div class="news-info">
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>May 25, 2019</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="#">Latest Point Table For The Premier League</a>
                                    </h3>
                                    <div class="news-desc mt-10">The snatch is a wide-grip, one-move lift. The clean and jerk is a close-grip...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="latest-news-grid small-grid">
                                <div class="news-img">
                                    <a href="#"><img src="assets/images/latest-news/2.jpg" alt="News Image"></a>
                                </div>
                                <div class="news-info">
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>May 13, 2019</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="#">Everything In Soccer Starts Premier League</a>
                                    </h3>
                                    <div class="news-desc mt-10">The snatch is a wide-grip, one-move lift. The clean and jerk is a close-grip...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="latest-news-grid small-grid">
                                <div class="news-img">
                                    <a href="#"><img src="assets/images/latest-news/3.jpg" alt="News Image"></a>
                                </div>
                                <div class="news-info">
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>May 14, 2019</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="#">City Tops Chelsea in Community Shield Here</a>
                                    </h3>
                                    <div class="news-desc mt-10">The snatch is a wide-grip, one-move lift. The clean and jerk is a close-grip...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="latest-news-grid small-grid">
                                <div class="news-img">
                                    <a href="#"><img src="assets/images/latest-news/4.jpg" alt="News Image"></a>
                                </div>
                                <div class="news-info">
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>May 14, 2019</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="#">Ground Round Meatball Starts Right Here</a>
                                    </h3>
                                    <div class="news-desc mt-10">The snatch is a wide-grip, one-move lift. The clean and jerk is a close-grip...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="title-style mb-50 md-mb-30">
                        <h2 class="margin-0 uppercase">Point table</h2>
                        <span class="line-bg left-line y-b pt-10"></span>
                    </div>
                    <div class="rs-pointtable no-overflow gaps bg3 bdru-4 mb-48 md-mb-72">
                        <table>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th>Team</th>
                                    <th>W</th>
                                    <th>L</th>
                                    <th>PTS</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Manchester Unt</td>
                                    <td>26</td>
                                    <td>3</td>
                                    <td>83</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Real Madrid</td>
                                    <td>24</td>
                                    <td>4</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Man City</td>
                                    <td>24</td>
                                    <td>3</td>
                                    <td>79</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Barcelona</td>
                                    <td>22</td>
                                    <td>3</td>
                                    <td>75</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Liverpool</td>
                                    <td>22</td>
                                    <td>4</td>
                                    <td>74</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Chelsea</td>
                                    <td>20</td>
                                    <td>4</td>
                                    <td>70</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Atletico Madrid</td>
                                    <td>18</td>
                                    <td>6</td>
                                    <td>64</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Valencia</td>
                                    <td>15</td>
                                    <td>9</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Real Sociedad</td>
                                    <td>12</td>
                                    <td>10</td>
                                    <td>48</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Arsenal</td>
                                    <td>12</td>
                                    <td>12</td>
                                    <td>48</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="title-style mb-50 md-mb-30">
                        <h2 class="margin-0 uppercase">Match fixtures</h2>
                        <span class="line-bg left-line y-b pt-10"></span>
                    </div>
                    <div class="rs-match-result style1 modify-style">
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 04, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/8.png" alt="Manchester City">
                                            <div class="name">Manchester City</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">12:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/9.png" alt="Barcelona">
                                            <div class="name">Barcelona</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Camp Nou Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 04, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/8.png" alt="Manchester City">
                                            <div class="name">Manchester City</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">03:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/10.png" alt="Chelsea">
                                            <div class="name">Chelsea</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Stamford Bridge</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">May 17, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/2.png" alt="Real Sociedad">
                                            <div class="name">Real Sociedad</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">02:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/3.png" alt="Liverpool">
                                            <div class="name">Manchester City</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Central Olympic Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 09, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/4.png" alt="Real Madrid">
                                            <div class="name">Real Madrid</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">10:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/3.png" alt="Liverpool">
                                            <div class="name">Manchester Unt</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Central Olympic Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 01, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/5.png" alt="Manchester Unt">
                                            <div class="name">Manchester Unt</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">09:30</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/6.png" alt="Atletico Madrid">
                                            <div class="name">Atletico Madrid</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Wanda Metropolitano Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 05, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/5.png" alt="Manchester Unt">
                                            <div class="name">Manchester Unt</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">08:40</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/1.png" alt="Valencia">
                                            <div class="name">Valencia</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Mestalla Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 02, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/5.png" alt="Manchester Unt">
                                            <div class="name">Manchester Unt</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">12:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/3.png" alt="Liverpool">
                                            <div class="name">Liverpool</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Central Olympic Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 02, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/5.png" alt="Manchester Unt">
                                            <div class="name">Manchester Unt</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">07:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/7.png" alt="Arsenal">
                                            <div class="name">Arsenal</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Emirates Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 05, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/8.png" alt="Manchester City">
                                            <div class="name">Manchester City</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">05:00</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/1.png" alt="Valencia">
                                            <div class="name">Valencia</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Etihad Stadium</div>
                                    </div>
                                </a>
                            </div>
                            <div class="items">
                                <a href="#">
                                    <div class="vanues">
                                        <div class="date">April 04, 2019</div>
                                    </div>
                                    <div class="teams">
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/8.png" alt="Manchester City">
                                            <div class="name">Manchester City</div>
                                        </div>
                                        <div class="time-vs">
                                            <span class="time">03:30</span>
                                            <span class="vs">vs</span>
                                        </div>
                                        <div class="logo">
                                            <img class="size-80" src="assets/images/team-logo/6.png" alt="Atletico Madrid">
                                            <div class="name">Atletico Madrid</div>
                                        </div>
                                    </div>
                                    <div class="vanues">
                                        <div class="stadium"><span>Venue:</span>Wanda Metropolitano Stadium</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest News Section End -->

    <!-- Counter Section Start -->
    <div class="rs-counter bg5 style1 pt-103 pb-92 md-pt-80 md-pb-70 sm-pt-73">
        <div class="container">
            <div class="rs-count">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 md-mb-30">
                        <div class="rs-counter-list text-center">
                            <h2 class="counter-number primary-color">350</h2>
                            <h3 class="counter-text uppercase white-color">Total matches</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 md-mb-30">
                        <div class="rs-counter-list text-center">
                            <h2 class="counter-number primary-color">25</h2>
                            <h3 class="counter-text uppercase white-color">Total trainers</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="rs-counter-list text-center">
                            <h2 class="counter-number primary-color">95</h2>
                            <h3 class="counter-text uppercase white-color">Total players</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="rs-counter-list text-center">
                            <h2 class="counter-number primary-color">26</h2>
                            <h3 class="counter-text uppercase white-color">Total awards</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

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

    <!-- Top Products Start -->
    <div id="tab-canchas" class="rs-products nav-style pt-92 md-pt-72">
        <div class="container">
            <div class="title-style text-center mb-50 md-mb-30">
                <h2 class="margin-0 uppercase">Canchas</h2>
                <span class="line-bg y-b pt-10"></span>
            </div>
            <div class="rs-carousel owl-carousel mb-100 md-mb-80" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="true" data-md-device-dots="false">
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/1.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">T-shirt Lol Red</a></h4>
                    <span class="product-price">
                        <span class="symbol">£</span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/2.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">T-shirt Pet Yellow</a></h4>
                    <span class="product-price">
                        <span class="symbol">£</span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/3.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">T-shirt Dark Green</a></h4>
                    <span class="product-price">
                        <span class="symbol">£</span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/4.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">T-shirt Creem Pink</a></h4>
                    <span class="product-price">
                        <span class="symbol">£</span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/5.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">T-shirt Drak Blue</a></h4>
                    <span class="product-price">
                        <span class="symbol">£</span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
                <div class="products">
                    <div class="product-img">
                        <a href="#"><img src="assets/images/products/6.png" alt=""></a>
                    </div>
                    <h4 class="product-title"><a href="#">Sports Back Cap</a></h4>
                    <span class="product-price">
                        <span class="symbol">£</span>65.00
                    </span>
                    <div class="cart-button">
                        <a href="#"><i class="flaticon-basket"></i></a>
                    </div>
                </div>
            </div>

            <!-- Subscribe Section Start -->
            <div class="rs-subscribe bg7">
                <form class="subscribe-form">
                    <div class="row rs-vertical-middle">
                        <div class="col-lg-6 col-md-12 md-mb-30">
                            <div class="title-part">
                                <h2 class="title white-color"> Subscribe Our Newsletter</h2>
                                <p class="desc margin-0 white-color"> Subscribe to our newsletter for getting regular updates.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="subscribe-form-fields">
                                <input type="submit" class="news-submit" value="Subscribe">
                                <input type="email" class="news-email" name="EMAIL" placeholder="EMAIL ADDRESS" required="">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Subscribe Section End -->
        </div>
    </div>
    <!-- Top Products End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer pt-137 md-pt-70 sm-pt-65">
        <!-- Sponsor Logo Section Start -->
        <div class="rs-sponsor pb-35 md-pb-60 sm-pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="logos">
                                    <a href="#"><img src="assets/images/sponsor/1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="logos">
                                    <a href="#"><img src="assets/images/sponsor/2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="logos">
                                    <a href="#"><img src="assets/images/sponsor/3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="logos">
                                    <a href="#"><img src="assets/images/sponsor/4.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="logos">
                                    <a href="#"><img src="assets/images/sponsor/5.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="logos">
                                    <a href="#"><img src="assets/images/sponsor/6.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="logos">
                                    <a href="#"><img src="assets/images/sponsor/7.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="logos">
                                    <a href="#"><img src="assets/images/sponsor/8.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sponsor Logo Section End -->

        <!-- Footer Bottom Section Start -->
        <div class="footer-bootom">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-md-7">
                        <div class="copyright">
                            <p>© 2019 Club Deportivo UPAO. All Rights Reserved. Designed by <a href="http://rstheme.com/" target="_blank">RSTheme</a></p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="footer-share text-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Section End -->
    </footer>
    <!-- Footer End -->

    <!-- Scrool to Top Start -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scrool to Top End -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here.." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- slick js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- isotope.pkgd.min js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- rsmenu js -->
    <script src="assets/js/rsmenu-main.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- counter top js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <!-- swiper slider js -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>