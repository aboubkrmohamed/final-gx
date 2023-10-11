@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/education.css') }}">
@endsection

@section('content')
    <!-- start the bg color -->
    <div class="dark-blue">
    </div>
    <!-- end the bg color -->

    <!-- start header  -->
    <div class="header">

        <div class="back-button" id="back-button">
            <a href="{{ route('home') }}" style="text-decoration: none;">
                <i class="fa-solid fa-angle-left " id="i"></i>
            </a>
        </div>

        <img src="{{ asset('img/education/header img.png') }}" class="img-fluid" alt="header image">

        <div class="header-title">
            <h1 class="title">
                <span class="title-E">Education</span>
                <span class="span"> <br /></span>
                <span class="title-D">division<br /></span>
            </h1>
            <img class="line-title" src="{{ asset('img/education/Line-title.svg') }}" />
        </div>
    </div>
    <!-- end header  -->

    <!-- start scroll to top button  -->

    <div class="up-button" id="scrollToTop">
        <i class="fa-solid fa-angle-up" id="to-top-button"></i>
    </div>

    <!-- end scroll to top button -->
@endsection

@section('scripts')
    <Script>
        // scroll to top button
        function scrollToTop() {
            window.scroll({
                top: 0,
                behavior: 'smooth'
            });
        }

        window.addEventListener('scroll', function() {
            const scrollToTopButton = document.getElementById('scrollToTop');
            if (scrollY >= 100) {
                scrollToTopButton.style.display = 'block';
            } else {
                scrollToTopButton.style.display = 'none';
            }
        });

        const scrollToTopButton = document.getElementById('scrollToTop');
        scrollToTopButton.addEventListener('click', scrollToTop);
    </Script>
@endsection
