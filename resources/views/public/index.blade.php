<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>KKS Enrekang 2022</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('landing/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/main.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('landing/js/modernizr.js') }}"></script>
    <script src="{{ asset('landing/js/pace.min.js') }}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('media/enrekang.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('media/enrekang.png') }}" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="{{ route('landing') }}">
                <img src="{{ asset('media/enrekang.png') }}" alt="Homepage" style="width: 65%">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="tutup"><span>Tutup</span></a>

            <div class="header-nav__content">
                <h3>Menu</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll" href="#home" title="beranda">Beranda</a></li>
                    <li><a class="smoothscroll" href="#about" title="tentang">Tentang</a></li>
                    <li><a href="{{ route('login') }}" title="masuk" style="color: #6841d9">Masuk</a></li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="{{ asset('media/landing.jpg') }}" data-natural-width=2560 data-natural-height=1600 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Selamat Datang Di</h3>

                <h1>
                    Sistem Informasi <br>
                    Kabupaten/Kota Sehat <br>
                    Enrekang 2022 <br>
                </h1>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Ke Bawah</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->

    </section> <!-- end s-home -->

    <!-- services
    ================================================== -->
    <section id='about' class="s-services">

        <div class="row section-header has-bottom-sep">
            <div class="col-full">
                <h3 class="subhead">Tentang</h3>
                <h1 class="display-2">KKS Enrekang 2022</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc">
            <div class="col-full">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt. 
                </p>
            </div>
        </div>

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Lorem Ipsum</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item">
                <div class="service-icon">
                    <i class="icon-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Lorem Ipsum</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item">
                <div class="service-icon">
                    <i class="icon-megaphone"></i>
                </div>  
                <div class="service-text">
                    <h3 class="h2">Lorem Ipsum</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item">
                <div class="service-icon">
                    <i class="icon-earth"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Lorem Ipsum</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item">
                <div class="service-icon">
                    <i class="icon-cube"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Lorem Ipsum</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>
    
            <div class="col-block service-item">
                <div class="service-icon"><i class="icon-lego-block"></i></div>
                <div class="service-text">
                    <h3 class="h2">Lorem Ipsum</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->

    <!-- footer
    ================================================== -->
    <footer>
        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright - Enrekang {{ date('Y') }}</span> 
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Ke Atas" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('landing/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('landing/js/plugins.js') }}"></script>
    <script src="{{ asset('landing/js/main.js') }}"></script>

</body>

</html>