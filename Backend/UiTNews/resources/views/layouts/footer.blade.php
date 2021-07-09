<link rel="stylesheet" href="../css/Footer.css">
<footer class="bg-dark text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!-- first row -->
                <div class="row rowFirst">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <!-- Logo -->
                        <a href="#!" class="footer-logo">
                            <img src="../images/logo.png" alt="footer_logo" class="img-thumbnail w-100"
                                style="width: 300px;height: 250px;">
                        </a>
                        <!-- Text -->
                        <p style="text-align:justify">
                            Circle News is an operational information division of the UIT responsible for the gathering
                            and broadcasting of news and current affairs around the world. Circle News, giving
                            information on its origins, as well.
                        </p>
                    </div>
                    <!--Grid column-->
                    <div class="col-lg-2"></div>
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-danger toogleText1">Discover</h5>

                        <ul class="list-unstyled mb-0 toogleMobile1">
                            <li>
                                <a href="#!" target="blank" class="text-white">Latest</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white">View</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white">World</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white">Technology</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white">Design</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white">Culture</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white">Business</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-danger toogleText2">About</h5>

                        <ul class="list-unstyled mb-0 toogleMobile2">
                            <li>
                                <a href="#!" target="blank" class="text-white">Newsroom</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white">Our Team</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white">Advertisement</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white">Testimonials</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!-- first row -->

                <!-- second row -->
                <div class="row rowSecond">
                    <!-- Section: Form -->
                    <section class="">
                        {{-- <form method="POST" action="{{ route('front.fb') }}"> --}}
                            {!! Form::open(array('route' => 'front.fb', 'class' => 'feedback-form')) !!}
                            <!--Grid row-->
                            @csrf
                            <div class="row d-flex justify-content-md-center">
                                <!--Grid column-->
                                <div class="col-auto">
                                    <p class="pt-2">
                                        <strong class="text-danger"> Your feedback</strong>
                                    </p>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-5 col-12">
                                    <!-- Email input -->
                                    <div class="form-outline form-white mb-4">
                                        <div class="mb-3 authen__form__control">
                                        <input for="email" name="email" id="feedback-email" type="email" id="email" class="form-control
                                        @error('email') is-invalid @enderror"  placeholder="Email address" required
                                        ><br>
                                     @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>
                                        <div class="mb-3 authen__form__control">
                                        <textarea for="comment" id="feedback-content" class="form-control" name="comment" rows="4" cols="50" placeholder="Tell us What do you think about us" required></textarea>
                                        <span class="authen__form__error"></span>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-auto">
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-outline-danger mt-8">{{_('send')}}

                                    </button>
                                </div>
                                <!--Grid column-->
                            </div>
                            {!! Form::close() !!}
                            <!--Grid row-->
                        {{-- </form> --}}
                    </section>
                    <!-- Section: Form -->
                </div>
                <!-- second row -->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Social media -->
        <div class="text-center p-3">
            <section class="mb-4 center p-4 pb-0">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;"
                    href="https://www.facebook.com/" target="_blank" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;"
                    href="https://twitter.com/twitter?lang=vi" target="_blank" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;"
                    href="https://www.instagram.com/" target="_blank" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;"
                    href="https://www.instagram.com/" target="_blank" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;"
                    href="https://www.linkedin.com/" target="_blank" role="button"><i
                        class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;"
                    href="https://github.com/" target="_blank" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright © 2021, Circle News
        </div>
        <!-- Copyright -->
    </footer>
<<<<<<< HEAD
</body>

<script src="../js/footer.js"></script>

</html>
=======

<script src="./js/footer.js" type="text/javascript"></script>
>>>>>>> master
