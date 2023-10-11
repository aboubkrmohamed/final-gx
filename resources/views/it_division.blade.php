@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/itdivision.css') }}">
@endsection

@section('content')
    <!-- start header -->
    <div class="header  ">

        <div class="back-button" id="back-button">
            <a href="{{ route('home') }}" style="text-decoration: none;">
                <i class="fa-solid fa-angle-left " id="i"></i>
            </a>
        </div>

        <img src="{{ asset('img/itdivision/header img.png') }}" class="img-fluid" alt="header image">
        <!-- header tite  -->
        <div class="header-title">
            <h1 class="title">
                <span class="title-E">It</span>
                <span class="span"> <br /></span>
                <span class="title-D">division<br /></span>
            </h1>
            <div class="tester">

            </div>
            <!-- <img class="line-title" src="{{ asset('img/itdivision/Line-title.svg') }}" /> -->
        </div>
    </div>
    <!-- start header -->


    <!-- our Innovation section group  -->
    <div class="row our-group ">
        <div class="row">
            <div class="col-md-12">
                <div class="it-box  ">
                    <a href="{{ route('software') }}" style="text-decoration: none;">
                        <div class="our-innovation">
                            <div class="text-group">
                                <div class="our-innovation-text">Our Innovation</div>
                                <div class="Htms-text">HTMS</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End our Innovation section group  -->

    <!-- row software and hardware  -->
    <div class="row software-hardware">
        <!-- software coloumn  -->
        <div class="col-md-6 d-flex">
            <div class="component">
                <a href="{{ route('software') }}" style="text-decoration: none;">
                    <div class="Software">
                        <h1>Software</h1>
                        <span>. Hero tech solutions </span>
                        <br><span>. Unis, Alpeta and ,<br>
                            <span>others </span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- hardware coloumn  -->
        <div class="col-md-6 d-flex">
            <div class="component">
                <a href="{{ route('hardware') }}" style="text-decoration: none;">
                    <div class="Hardware">
                        <h1>Hardware</h1>
                        <span>. Virdi solutions</span>
                        <br><span>. Hero tech </span>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <!-- End row software and hardware  -->
@endsection
