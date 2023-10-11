@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/projectsdivision.css') }}">
@endsection

@section('content')
    <!--start the whole page -->

    <!-- start header  -->
    <div class="header  ">
        <div class="back-button" id="back-button">
            <a href="{{ route('home') }}" style="text-decoration: none;">
                <i class="fa-solid fa-angle-left " id="i"></i>
            </a>
        </div>

        <img src="{{ asset('img/projects_division/header img.png') }}" class="img-fluid" alt="header image">

        <div class="header-title">
            <h1 class="title">
                <span class="title-E">Projects</span>
                <span class="span"> <br /></span>
                <span class="title-D">division<br /></span>
            </h1>
            <img class="line-title" src="{{ asset('img/projects_division/Line-title.svg') }}" />
        </div>
    </div>
    <!-- end header  -->

    <!-- start whole project design  -->

    <div class="projects-all">
        <div class="row">
            <!-- start left coloumn  -->
            <div class="left col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3 card-custom" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/projects_division/image 13.png') }}" class="img-fluid " alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title card-title-custom">Project</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <button class="See-more">See more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-3 card-custom" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/projects_division/image 14.png') }}" class="img-fluid " alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title card-title-custom">Project</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <button class="See-more">See more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-3 card-custom" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/projects_division/image 15.png') }}" class="img-fluid " alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title card-title-custom">Project</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <button class="See-more">See more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end left coloumn -->


            <!-- start right coloumn  -->

            <div class="right col-md-6 mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3 card-custom" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/projects_division/image 16.png') }}" class="img-fluid " alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title card-title-custom">Project</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <button class="See-more">See more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-3 card-custom" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/projects_division/image 17.png') }}" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title card-title-custom">Project</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <button class="See-more">See more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-3 card-custom" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/projects_division/image 18.png') }}" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title card-title-custom">Project</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <button class="See-more">See more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end right coloumn -->
        </div>
    </div>
    <!-- end whole project design  -->
    <br><br><br>
@endsection
