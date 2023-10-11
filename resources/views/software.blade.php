@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/software.css') }}">
@endsection

@section('content')
    <!-- start the background -->

    <div class="background">

        <!-- header  -->
        <!-- logo  -->
        <div class="logo">
            <img src="{{ asset('img/software/Logo correct.png') }}" class="img-fluid" alt="logo">
        </div>

        <div class="back-button" id="back-button">
            <a href="{{ route('home') }}" style="text-decoration: none;">
                <i class="fa-solid fa-angle-left " id="i"></i>
            </a>
        </div>



        <div class="header-title">
            <h1 class="title">
                <span class="title-E">Software</span>

            </h1>
        </div>

        <!-- End header  -->


        <div class="card card-custom first-custom ">
            <div class="row ">
                <!-- start software systems  -->
                <div class="software-systems ">

                    <br><br>

                    <div class="card  card-custom">
                        <div class="row">
                            <!-- -------------------------------htms-------------------- -->
                            <div class="card mb-3 card-custom ">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body Card-Body-custom">
                                            <h5 class="card-title card-title-custom">HTMS</h5>
                                            <p class="card-text" style=" text-align: justify;">Hero team management system
                                                (HTMS) is a
                                                full solution to enhance your
                                                manpower productivity through 3 modules:<br>
                                                (1) Time and attendance<br>
                                                (2) Human resources<br>
                                                (3) Task management System<br>
                                                Acting as follow up department for each employee,Apply digitals
                                                transformation standards and evaluate your manpower performance, your
                                                business will be in your hand whenever wherever full monitoring full
                                                controlHTMS is a professional tool to manage your business in no time</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/software/Group 58.png') }}" class="spicial " alt="htms">
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br><br><br><br><br>
                            <!-- -------------------------------UNIS-Virdi-------------------- -->

                            <div class="card mb-3 card-custom">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body Card-Body-custom">
                                            <h5 class="card-title card-title-custom">UNIS-Virdi</h5>
                                            <p class="card-text">Virdi Unis empowers organizations to
                                                manage access permissions efficiently,
                                                enabling them to safeguard sensitive
                                                information while streamlining operational
                                                processes. The software's user-friendly
                                                interface and robust features make it
                                                an essential tool for modern security and access control needs.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/software/unis.png') }}" class="img-fluid " alt="alpeta">
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br>
                            <br><br><br><br><br><br><br><br>
                            <!-- -------------------------------Alpeta–Virdi-------------------- -->

                            <div class="card  card-custom ">
                                <div class="row ">
                                    <div class="col-md-8">
                                        <div class="card-body Card-Body-custom">
                                            <h5 class="card-title card-title-custom">Alpeta–Virdi</h5>
                                            <p class="card-text">Presents a comprehensive approach
                                                to workforce management and
                                                attendance tracking. Leveraging
                                                advanced biometric solutions</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/software/alpeta.png') }}" class="img-fluid " alt="alpeta">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- End software systems  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
