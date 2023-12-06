

<footer id="footer" class="border-top-0 m-0 lazyload" data-bg-src="{{asset('frontend/img/demos/business-consulting-3/backgrounds/background-4.jpg')}}" style="background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container pt-3">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-auto mb-4 mb-lg-0">
                
            <img src="{{asset('frontend/img/demos/business-consulting-3/vision2023.webp')}}" class="img-fluid" width="500" height="300" alt="" />
            </div>
        </div>
        <hr class="bg-color-light opacity-1 my-0">
        <div class="row pt-3 mt-5">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a href="#" class="text-decoration-none">
                    <img src="{{asset('frontend/img/demos/business-consulting-3/header-logo-mobile.webp')}}" style="width: auto" class="img-fluid mb-4" alt="" />
                </a>
                <p class="text-3-5">Striving for excellence, we innovate, support, and empower your business journey. </p>
                <!----
                <ul class="social-icons social-icons-clean social-icons-clean-with-border social-icons-medium social-icons-icon-light">
                    <li class="social-icons-facebook"><a href="{{config('global.facebook')}}" target="_blank" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter mx-2"><a href="http://www.twitter.com/" target="_blank" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="{{config('global.linkedin')}}" target="_blank" title="Linkedin" data-cursor-effect-hover="fit"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
                !---->
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <ul class="list list-icons list-icons-lg">
                    <li class="d-flex px-0 mb-1">
                        <img width="25" src="{{asset('frontend/img/demos/business-consulting-3/icons/phone.svg')}}" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <a href="tel:{{config('global.phone')}}" class="text-color-light font-weight-semibold text-3-4 ms-2">{{config('global.phone')}}</a>
                    </li>
                    <li class="d-flex px-0 my-3">
                        <img width="25" src="{{asset('frontend/img/demos/business-consulting-3/icons/email.svg')}}" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <a href="mailto:{{config('global.email')}}" class="text-color-light font-weight-semibold text-3-4 ms-2">{{config('global.email')}}</a>
                    </li>
{{--                    <li class="d-flex font-weight-semibold text-color-light px-0 mb-1">--}}
{{--                        <img width="25" src="{{asset('frontend/img/demos/business-consulting-3/icons/map-pin.svg')}}" alt="Location" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light me-2'}" />--}}
{{--                        1234 Street Name, New York, NY 10000, USA--}}
{{--                    </li>--}}
                </ul>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <!----<div id="googlemaps" class="google-map m-0" style="height: 190px;"></div>!---->
                <h4 class="font-weight-bold text-5">Branches</h4>
                <ul class="list list-icons list-icons-sm">
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="#" class="link-hover-style-1 ms-1"> Kingdom of Saudi Arabia</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="#" class="link-hover-style-1 ms-1"> Sultanate of Oman </a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="#" class="link-hover-style-1 ms-1"> United Arab Emirates </a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="#" class="link-hover-style-1 ms-1"> Arab Republic of Egypt</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="#" class="link-hover-style-1 ms-1"> Kingdom of Hashemite Jordan</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="#" class="link-hover-style-1 ms-1"> Kingdom of Bahrain </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h4 class="font-weight-bold text-5">Useful Links</h4>
                <ul class="list list-icons list-icons-sm">
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="#get-in-touch" class="link-hover-style-1 ms-1"> Contact Us</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="#services" class="link-hover-style-1 ms-1"> Our Services</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="#our-mission" class="link-hover-style-1 ms-1"> Our Mission</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="#about-us" class="link-hover-style-1 ms-1"> About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright container bg-transparent">
        <div class="row pb-5">
            <div class="col-lg-12 text-center m-0">
                <hr class="bg-color-light opacity-1 mt-5 mb-4">
                <p class="text-3-4">SABC © {{today()->year}}. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
