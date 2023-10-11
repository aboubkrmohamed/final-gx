<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GX Group</title>
    <link rel="icon" href="{{ asset('img/logo icon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css.map') }}">
    <link rel="stylesheet" href="{{ asset('css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">

    @yield('styles')
</head>

<body style="overflow-x: hidden;">
  @if (!isset($hideHeader))
    <!----------------------- start navbar  -------------->
    <div class="logo-correct">
        <img src="{{ asset('img/Logo correct.png') }}" alt="logo-correct">
    </div>
    <div class="navbar-header">
        <nav class="navbar navbar-expand-lg transparent">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item outsideLinks outsideLinks">
                            <a class="nav-link allLinks {{ Request::routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">HOME</a>
                        </li>
                        <li class="nav-item outsideLinks">
                            <a class="nav-link allLinks {{ Request::routeIs('itDivision') ? 'active' : '' }}" href="{{ route('itDivision') }}">IT DIVISION</a>
                        </li>
                        <li class="nav-item outsideLinks">
                            <a class="nav-link allLinks {{ Request::routeIs('projectDivision') ? 'active' : '' }}" href="{{ route('projectDivision') }}">PROJECT
                                DIVISION</a>
                        </li>
                        <li class="nav-item outsideLinks">
                            <a class="nav-link allLinks {{ Request::routeIs('education') ? 'active' : '' }}" href="{{ route('education') }}">Education DIVISION</a>
                        </li>
                        <li class="nav-item outsideLinks">
                            <a class="nav-link allLinks {{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">ABOUT US</a>
                        </li>
                        <li class="nav-item outsideLinks">
                            <a class="nav-link allLinks {{ Request::routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">CONTACT US </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!----------------------- end nabar  -------------->
  @endif

    @yield('content')

    <!-- start scroll to top button  -->

    <div class="up-button" id="scrollToTop">
        <i class="fa-solid fa-angle-up" id="to-top-button"></i>
    </div>

    <!-- end scroll to top button -->

    <!--  ----------------------------------------Footer----------------------------------------- -->
    <footer class="custom-footer">
        <div class="top-line"></div>
        <div>
            <!-- First row with three columns -->
            <div class="row footer-content ">
                <div class="col-md-7 mt-5 get-in-touch   ">
                    <h1>Hot Links</h1>
                    <div class="mt-3 ">
                        <div class="links ">
                            <div class="d-flex justify-content-center pb-3">
                                <a href="{{ route('home') }}" style="margin-right: 8%;"> Home</a>
                                <a href="{{ route('contact') }}" style="margin-right: 4%; "> Contact us</a>
                            </div>
                            <div class="d-flex justify-content-center ">
                                <a href="{{ route('projectDivision') }}" style="margin-right: 2%;"></i>
                                    Projects division </a>
                                <a href="{{ route('itDivision') }}"style="margin-right: 2%;"> </i> It division </a>

                                <a href="{{ route('about') }}"style="margin-right: 2%;"> </i> About us</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5  follow-section mt-5">
                    <div class="follow">
                        <div class="group ">
                            <h1 class="follow-title">Follow Us</h1>
                            <div class=" frame mt-4">
                                <div class="line ">
                                    <a href="https://instagram.com/herotech.us" target="_blank">
                                        <i class="fa-brands fa-instagram icons"></i>
                                    </a>
                                    <a href="https://twitter.com/TechTech1652330" target="_blank">
                                        <i class="fa-brands fa-x-twitter icons"></i>
                                    </a>
                                </div>
                                <div class="line middle-line ">
                                    <a href="https://wa.me/201149708348" target="_blank">
                                        <i class="fa-brands fa-whatsapp icons">

                                        </i>
                                    </a>
                                    <a href="https://www.facebook.com/profile.php?id=100081776267096&mibextid=ZbWKwL"
                                        target="_blank">
                                        <i class="fa-brands fa-facebook-f icons"></i>
                                    </a>
                                </div>
                                <div class="line ">
                                    <a href="https://www.linkedin.com/in/hero-tech-22756a270" target="_blank">
                                        <i class="fa-brands fa-linkedin icons"></i>
                                    </a>
                                    <a href="https://www.youtube.com/@herotech-um4tr" target="_blank">
                                        <i class="fa-brands fa-youtube icons">

                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12 last-row d-flex justify-content-center align-items-end">
                    <div class="allrights">
                        <p class="hero-tech-all-rights">
                            <span class="copy me-1">&copy; </span>
                            <span class="span">GX Group</span>
                            <span class="text">. All Rights Reserved</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
    
    @yield('scripts')
    
    <script>
        new WOW().init();
    </script>
</body>
</html>
