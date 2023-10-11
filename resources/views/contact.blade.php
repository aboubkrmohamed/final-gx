@extends('layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contactUs.css') }}">
    <style>
        .error { color: red; }
    </style>
@endsection

@section('content')
    <!-- contact us page start -->
    <div class="contact-us-page w-100">
        <!-- head line for page  -->
        <div class="contact-us-head ">
            <h1>Grow your <br> business</h1>
        </div>
        <!-- bottom layer start  -->
        <div class="get-in-touch">
            <!-- img-for-bottom layer -->
            <img src="{{ asset('img/contact_us/Rectanglee.png') }}" alt="" class="img-fluid d-lg-block d-xs-none d-sm-none">

            <!-- text over bottom layer  -->

            <div class="container">
                <div class="row">
                    <!-- form side -->
                    <div class="  col-md-6  left-side wow  bounceInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="over-layer">
                            <h1 class="get">GET
                                <div class="tester"></div>
                            </h1>
                            <span>
                                <h2>in touch !</h2>
                            </span>
                        </div>

                        <!-- start form  -->
                        <form class="register" id="contact-form">
                            @csrf
                            <div id="add_contact-alert" class="alert alert-success" role="alert" style="display: none"></div>
                            <input name="name" class="register-input" placeholder="NAME" required>
                            <input type="email" name="email" class="register-input" placeholder="E-MAIL" required>
                            <input name="subject" class="register-input" placeholder="SUBJECT" required>
                            <input name="message" class="register-input" placeholder="MESSAGE" required>
                            <button type="submit" class="btn button-sub" id="add_contact">Submit</button>
                        </form>
                        <!-- start form  -->
                    </div>

                    <!-- end form side -->

                    <!-- right side -->
                    <div class=" col-md-6 right-side wow  bounceInRight" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <!-- for: call us  , visit office , mail us -->
                        <div class="row for-right-side">
                            <div class="col-md-4">
                                <span>
                                    <i class="fa-solid fa-mobile-screen test"></i>
                                    <h6>Call us on</h6>
                                    <h6>+01 (626) 262-4012</h6>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <span>
                                    <i class="fa-solid fa-earth-asia test"></i>
                                    <h6>Visit office</h6>
                                    <h6>
                                        1055 E. Colorado Blvd., <br>
                                        Suite 500Pasadena, CA 91106
                                    </h6>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <span>
                                    <i class="fa-regular fa-envelope test"></i>
                                    <h6>Mail us on</h6>
                                    <h6>info@gxgroup-mea.com</h6>
                                </span>
                            </div>
                        </div>
                        <!-- end: call us  , visit office , mail us -->

                        <!-- for social media icons  -->
                        <div class=" row ">
                            <!-- start social-media icons  -->
                            <div class="icons-style">
                                <a href="https://instagram.com/gx_group1?igshid=MWZjMTM2ODFkZg==" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=100059067036749&mibextid=ZbWKwL"
                                    target="_blank">
                                    <i class="fa-brands fa-square-facebook"></i> </a>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin"></i> </a>
                                <a href="https://wa.me/201149708348" target="_blank">
                                    <i class="fa-brands fa-whatsapp"></i> </a>
                                <a href="https://twitter.com/EgyptVirdi" target="_blank">
                                    <i class="fa-brands fa-x-twitter"></i> </a>
                                <a href="https://youtube.com/@virdiegypt6766?si=0MpENs8NO024Ue-y" target="_blank">
                                    <i class="fa-brands fa-youtube"></i> </a>
                            </div>
                            <!-- end social-media icons  -->
                        </div>
                        <!-- end social media icons  -->
                    </div>
                    <!--  end right side -->
                </div>
            </div>
        </div>
        <!-- bottom layer end  -->
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            jQuery.validator.methods.matches = function(value, element, params) {
                var re = new RegExp(params);
                return this.optional(element) || re.test(value);
            }

            $('#contact-form').validate();
        });

        $("#contact-form").submit(function(event) {
            // Stop form from submitting normally
            event.preventDefault();

            if (!$(this).valid()) return false;

            $('#add_contact').prop("disabled", true);
            $('#add_contact').html(
                `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...`
            );

            var formData = new FormData($(this)[0]);

            $.ajax({
                url: "{{ route('contact-submit') }}",
                type: 'post',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.success) {
                        $('#add_contact-alert').removeClass('alert-danger');
                        $('#add_contact-alert').addClass('alert-success');
                        $('#add_contact-alert').text("Your message has been sent. Thank you!");
                        $('#add_contact-alert').show();
                        $('#contact-form').trigger("reset");
                    } else {
                        $('#add_contact-alert').removeClass('alert-success');
                        $('#add_contact-alert').addClass('alert-danger');
                        $('#add_contact-alert').text(
                            "Error happened during sending message, please try again later");
                        $('#add_contact-alert').show();
                    }

                    $('#add_contact').prop("disabled", false);
                    $('#add_contact').text("Submit");

                    $('html, body').animate({
                        scrollTop: $("#add_contact-alert").offset().top - 140
                    }, 1000);
                }
            });
        });
    </script>
@endsection
