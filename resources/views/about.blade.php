@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@endsection

@section('content')
    <!-- start design the whole page  -->
    <div class="about-us-page">
        <div class="rec">
            <!-- the above overlay rectangle -->
            <div class="above-rec">
                <!-- row one (title+ paragraph) -->
                <div class="row rowone-custom">
                    <div class="col-md-8 wow  bounceInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="head-line">
                            <h1 class="get">WHO
                                <div class="tester"></div>
                            </h1>
                            <span>
                                <h2>WE ARE !</h2>
                            </span>
                        </div>
                        <div class="col-one-content  ">
                            <div class="container for-content" class="for-content"
                                style=" text-align: justify; background-image: url({{ asset('img/about_us/UNDERtextrec.png') }}); height:250%; width: 92%;  background-repeat:no-repeat;">
                                Lorem ipsum dolor sit amet consectetur. Sodales
                                fames elit leo lectus suscipit accumsan. Enim platea eu nec lorem odio.
                                Massa maecenas ante viverra rhoncus gravida scelerisque. Elementum
                                elementum viverra duis posuere nisi mi in sagittis.
                                Lorem ipsum dolor sit amet consectetur. Sodales
                                fames elit leo lectus suscipit accumsan. Enim platea eu nec lorem odio.
                                Massa maecenas ante viverra rhoncus gravida scelerisque. Elementum
                                elementum viverra duis posuere nisi mi in sagittis.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 right-side wow  bounceInRight" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <img src="{{ asset('img/about_us/leftImage.png') }}" alt="right image">
                    </div>
                </div>

                <!-- end row one (title+ paragraph) -->
                <!-- second section (row) -->
                <div class="row col-md-12 rowtwo-custom wow  bounceIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="second-line">
                        <h1 class="ourconcepts">our concepts and vision
                            <div class="for-line">
                            </div>
                        </h1>
                    </div>
                    <div class="hand-img">
                        <img src="{{ asset('img/about_us/hand.png') }}" class="img-fluid" alt="Hand">
                    </div>
                </div>
                <!-- second section (row) -->
            </div>
            <!-- end the above overlay rectangle -->
        </div>
    </div>
@endsection
