@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Hardware.css') }}">
@endsection

@section('content')
    <!-- start background and header -->
    <div class="dark-blue">
        <!-- logo -->
        <div class="logo">
            <img src="{{ asset('img/software/Logo correct.png') }}" alt="logo" class="img-fluid">
        </div>
        
        <!-- button to return back -->
        <div class="back-button" id="back-button">
            <a href="{{ route('home') }}" style="text-decoration: none;">
                <i class="fa-solid fa-angle-left " id="i"></i>
            </a>
        </div>
        <!-- end button to return back -->

        <!-- header title -->
        <div class="header-title">
            <h1 class="title">
                <span class="title-H">Hardware</span>
            </h1>
            <img class="line-title" src="{{ asset('img/hardware/Line-title.svg') }}" />
        </div>
    </div>

    <!-- end background and header -->

    <div class="main">
        <div class="container ">
            <div class="information-main">
                <!------------------------------ Start Hero-Tech ---------------------->
                <div class="hero-tech">
                    <img src="{{ asset('img/hardware/hero_logo 1.png') }}" class="hero-logo">
                    <ul>
                        <li> <a href="#heroOne" class="btn-click" id="btnHeroOne"> Hero one</a></li>
                        <li><a href="#heroTemp" class="btn-click" id="btnTemp">Hero One Temp</a></li>
                        <li><a href="#SuperHero" class="btn-click" id="btnSuper">Super Hero</a></li>
                        <li><a href="#heroTwo" class="btn-click" id="btnTwo">Hero Two</a></li>
                        <li><a href="#heroPlam" class="btn-click" id="btnPlam">Hero Palm</a></li>
                        <li><a href="#heroPower" class="btn-click" id="btnPower">Hero Power plus+</a></li>
                        <li><a href="#heroLock" class="btn-click" id="btnLock">Hero lock</a></li>
                        <li><a href="#heroFace" class="btn-click" id="btnFace">Hero Lock Face</a></li>
                    </ul>
                </div>
                <!------------------------------ End Hero-Tech ---------------------->

                <!-- line at middle  -->
                <div class="border-middle">
                    <img src="{{ asset('img/hardware/Line 9.png') }}" alt="">
                </div>
                <!-- End line at middle  -->


                <!------------------------------ Start Virdi ---------------------->

                <div class="virdi">
                    <img src="{{ asset('img/hardware/virdi.png') }}" class="virdi-logo">
                    <ul>
                        <li> <a href="#virdiAC" id="btnAC" class="btn-click"> Virdi AC-2200</a></li>
                        <li><a href="#proLite" id="BtnproLite" class="btn-click ">UBio-X Pro Lite</a></li>
                        <li><a href="#virdiPro" id="btnvirdiPro" class="btn-click">UBio-X Pro 2</a></li>
                        <li><a href="#Xface" id="btnXface" class="btn-click">UBio-X Face</a></li>
                    </ul>
                </div>
                <!------------------------------ End Virdi ---------------------->

            </div>

            <!-- data-information -->
            <div class="main-data">

                <!------------------ hero One ----------------------->

                <div class="hero-one data-information show" id="heroOne">
                    <img src="{{ asset('img/hardware/hero-imgea/one.jpg') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/hero-imgea/hero_one.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/hero-imgea/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>

                <!-------------- hero one temp ---------->

                <div class="hero-Temp data-information" id="heroTemp">
                    <img src="{{ asset('img/hardware/hero-imgea/temp-.jpg') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/hero-imgea/hero_one_temp.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/hero-imgea/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>

                <!---------------- super hero ------------------->
                <div class="super-hero data-information" id="SuperHero">
                    <img src="{{ asset('img/hardware/hero-imgea/souper hero.jpg') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/hero-imgea/super_hero.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/hero-imgea/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>

                <!------------- hero two -------------->
                <div class="hero-two data-information" id="heroTwo">
                    <img src="{{ asset('img/hardware/hero-imgea/tow.jpg') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/hero-imgea/hero_two.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/hero-imgea/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>

                <!-------------- hero plam  --------------->
                <div class="hero-plam data-information" id="heroPlam">
                    <img src="{{ asset('img/hardware/hero-imgea/hero-palm.png') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/hero-imgea/palm.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/hero-imgea/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>

                <!-------------------- hero power ------------->
                <div class="hero-power data-information" id="heroPower">
                    <img src="{{ asset('img/hardware/hero-imgea/power plus.png') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/hero-imgea/hero_power_plus.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/hero-imgea/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>

                <!----------------- hero lock  ------------->

                <div class="hero-lock data-information" id="heroLock">
                    <img src="{{ asset('img/hardware/hero-imgea/hero lock.png') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/hero-imgea/hero_lock.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/hero-imgea/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>

                <!----------------- hero lock face  ------------->

                <div class="hero-face data-information" id="heroFace">
                    <img src="{{ asset('img/hardware/hero-imgea/hero lock face (1).png') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/hero-imgea/hero_lock_face.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/hero-imgea/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>


                <!----------------- hero virdi AC  ------------->

                <div class="virdi-ac data-information" id="virdiAC">
                    <img src="{{ asset('img/hardware/virdi image/virdi ac-2200.jpg') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/virdi image/AC-2200.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/virdi image/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>


                <!----------------- hero virdi pro lite  ------------->

                <div class="pro-lite data-information" id="proLite">
                    <img src="{{ asset('img/hardware/virdi image/X pro lite.jpg') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/virdi image/UBIO-X-PRO LITE.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/virdi image/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>

                <!----------------- hero pro2  ------------->

                <div class="virdi-pro data-information" id="virdiPro">
                    <img src="{{ asset('img/hardware/virdi image/x pro2.jpg') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/virdi image/UBIO-X-PRO 2.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/virdi image/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>

                <!----------------- hero X face    ------------->

                <div class="X-face data-information" id="Xface">
                    <img src="{{ asset('img/hardware/virdi image/x-face.jpg') }}" class="wow  bounceInLeft"data-wow-duration="1.4s"
                        data-wow-delay=".3s">
                    <a href="{{ asset('img/hardware/virdi image/UBIO-X-FACE.pdf') }}" target="_blank" class="pdf"> <img
                            src="{{ asset('img/hardware/virdi image/Group 70.png') }}" class="wow  bounceInRight"data-wow-duration="1.4s"
                            data-wow-delay=".3s"></a>
                </div>
            </div>
            <!-- End data-information -->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/hardware_js.js') }}"></script>
@endsection