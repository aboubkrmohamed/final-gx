@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="home-main">
        <div class="content-main">
            <div class="row">
                <!-- left side  -->
                <div class="col-lg-2 left-side wow  bounceInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                    <div class="flags">
                        <img src="{{ asset('img/emojione-v1_flag-for-egypt.png') }}">
                        <img src="{{ asset('img/emojione-v1_flag-for-united-states.png') }}">
                        <img src="{{ asset('img/emojione-v1_flag-for-united-arab-emirates.png') }}">
                        <img src="{{ asset('img/emojione-v1_flag-for-poland.png') }}">
                        <img src="{{ asset('img/emojione-v1_flag-for-oman.png') }}">
                        <img src="{{ asset('img/twemoji_flag-china.png') }}">
                    </div>
                </div>

                <!-- middle side  -->

                <div class=" col-lg-8">
                    <div class="middle-side">
                        <!----------------------------------- -->
                        <div class="row">
                            <div class="col-lg-5">
                                <h1>Your <br> partner <br> for <br>
                                    <span style="color: #F24E1E;">success</span>
                                </h1>
                            </div>

                            <div class="col-lg-7">
                                <div id="Laptop">
                                    <div id="inside-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h1 class="links-success  wow  bounceInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <a href="{{ route('successStory') }}" style="text-decoration: none; color: #fff;">
                            <img src="{{ asset('img/success.png') }}" alt="">
                        </a>
                    </h1>
                </div>

                <!-- left side  -->
                <div class="col-lg-2   ">
                    <div class="right-side  wow  bounceInRight" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="awards">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--------- why-we-offer ------------->

    <div class="why-we-offer">
        <div class="layer-offer">
            <div class="img-title wow  bounceInDown" data-wow-duration="1.3s" data-wow-delay=".2s">
                <img src="{{ asset('img/What we offer.png') }}" class="img-offer">
            </div>
            <div class="row">
                <!------------------- start  it division ------------->
                <div class="col-md-4  wow  bounceIn" data-wow-duration="1.5s" data-wow-delay=".2s">
                    <a href="{{ route('itDivision') }}">
                        <div class="itDivision">
                            <img src="{{ asset('img/pngfind 1.png') }}">
                            <h2> IT Division </h2>
                            <p style=" text-align: justify;">GX specializes in
                                cutting-edge attendance
                                devices with the latest
                                security systems</p>

                        </div>
                    </a>
                </div>

                <!-------------------- start eduction division ------------------------->

                <div class="col-md-4  wow  bounceIn" data-wow-duration="1.7s" data-wow-delay=".4s">
                    <a href="{{ route('education') }}">
                        <div class="education">
                            <img src="{{ asset('img/Group 73.png') }}">
                            <h2> Education Division </h2>
                            <p style=" text-align: justify;">GX offers premium
                                educational solutions through
                                partnerships with
                                leading universities</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 wow  bounceIn" data-wow-duration="2s" data-wow-delay=".6s">
                    <a href="{{ route('projectDivision') }}">
                        <div class="Project">
                            <img src="{{ asset('img/business-plan 1.png') }}">
                            <h2> Project Division </h2>
                            <p style=" text-align: justify;">GX is dedicated to delivering
                                Top notch projects, showcasing
                                Our unwavering commitment
                                to excellence</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--------- why-we-offer ------------->

    <div class="why-wy-choose">
        <div class="layer-choose">
            <div class="img-title wow  bounceInDown" data-wow-duration="1.3s" data-wow-delay=".2s">
                <img src="{{ asset('img/Why choose us.png') }}" class="img-choose">
            </div>
            <div class="row">
                <!------------------- start  it division ------------->
                <div class="col-md-6">
                    <div class="apart pt-4 wow  bounceInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <h3> What Sets Us Apart </h3>
                        <div class="unique-products pt-5">
                            <h2>Unique Products</h2>
                            <p>Great an engagement hybrid work environment Unleash your sense of wonder with our selection
                                of truly unique solution of H.W & S.W.
                                GX built up on user friendly design and supported in Arabic, English and French with high
                                quality
                                material to make you enjoy the experience while using Hero Team management systems (HTMS)
                                and the ease
                                of running the company in no time.</p>
                        </div>
                        <div class="Experience pt-5">
                            <h2>Experience</h2>
                            <p>Through 20 Years we earned customer satisfaction in world wide During twenty years we
                                developed many solutions
                                and solved thousands of troubleshooting and problems which gave us the power of innovation,
                                and excellence to exceed your
                                expectations.</p>
                        </div>
                        <div class="Services pt-5">
                            <h2>Services</h2>
                            <p>At our company, we pride ourselves on delivering exceptional customer service that goes above
                                and beyond your expectations.By far we the only company that are too happy when our
                                customers face a problem
                                because that gives us chance to show our customers the true meaning of customer service
                                because true partner appear at the hard times.</p>
                        </div>
                    </div>
                </div>

                <!-------------------- start eduction division ------------------------->

                <div class="col-md-6 mt-5 wow  bounceInRight" data-wow-duration="1.6s" data-wow-delay=".4s">
                    <div class="right-apart pt-4">
                        <p style=" text-align: justify;">Selecting GX Company is an easy choice due to our comprehensive
                            expertise across various domains.
                            Our dedication to client satisfaction, coupled with our proficiency in crafting tailored
                            solutions, guarantees that our business needs will be met with excellence. With GX, you will
                            find a
                            reliable partner that shares your vision for growth and innovation.
                            "GX Company proudly holds the distinction of being the first company as the exclusive agent for
                            Virdi and Herotech in Egypt With GX, we've unlocked a world of possibilities and solutions,
                            where cutting-edge technology meets exceptional design to enhance our business operations
                            effortlessly.</p>
                        <img class="w-100 pb-5"
                            src="{{ asset('img/global-businessman-holding-glowing-sphere-futuristic-communication-concepts-generated-by-ai 1.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const pics = [
            "{{ asset('img/ai-cloud-concept-with-robot-arm 2.png') }}",
            "{{ asset('img/anniversarry copy 1.png') }}",
            "{{ asset('img/Group 87.png') }}",
            "{{ asset('img/Group 88.png') }}",
        ];

        setInterval(function() {
            var a = Math.floor(Math.random() * pics.length)
            cartona = `<img src="${pics[a]}">`
            document.getElementById('inside-img').innerHTML = cartona
        }, 2000)
    </script>
@endsection
