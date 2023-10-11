@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/success-story.css') }}">
@endsection

@section('content')
    <div class="success-story">
        <div class="layer">
            <h1 class="title-heading pt-5">OUR SUCCESS STORY</h1>
            <div class="underline"></div>

            <div class="gx-logo">
                <img src="{{ asset('img/success_story/Logo correct.png') }}">
            </div>

            <div class="W-btns">
                <div class="tester">
                    <img src="{{ asset('img/success_story/test.png') }}" class="allImages" alt="">
                </div>
                <div class="elements-one">
                    <img src="{{ asset('img/success_story/1.png') }}" class="allImages">
                </div>
                <div class="elements-two">
                    <img src="{{ asset('img/success_story/2.png') }}" class="allImages" alt="">
                </div>
                <div class="elements-three">
                    <img src="{{ asset('img/success_story/3.png') }}" class="allImages">
                </div>
                <div class="elements-four">
                    <img src="{{ asset('img/success_story/4.png') }}" class="allImages">
                </div>
                <div class="elements-five">
                    <img src="{{ asset('img/success_story/5.png') }}" class="allImages">
                </div>
                <div class="elements-six">
                    <img src="{{ asset('img/success_story/6.png') }}" class="allImages">
                </div>
                <div class="elements-Seven">
                    <img src="{{ asset('img/success_story/7.png') }}" class="allImages">
                </div>
                <div class="elements-eight">
                    <img src="{{ asset('img/success_story/8.png') }}" class="allImages">
                </div>
                <div class="elements-nine">
                    <img src="{{ asset('img/success_story/9.png') }}" class="allImages">
                </div>
                <div class="elements-ten">
                    <img src="{{ asset('img/success_story/10.png') }}" class="allImages">
                </div>
                <div class="elements-eleven">
                    <img src="{{ asset('img/success_story/11.png') }}" class="allImages">
                </div>
            </div>
        </div>
    </div>

    <div id="lightboxcontainer" class="  justify-content-center align-items-center">
        <div id="lightboxcontaineritem" class=" position-relative d-flex justify-content-between  align-items-center">
            <button id="close"><i class="fa-solid fa-xmark"></i></button>
            <button id="prev"><i class="fa-solid fa-caret-left"></i> </button>
            <button id="next"><i class="fa-solid fa-caret-right"></i></button>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/success.js') }}"></script>
@endsection
