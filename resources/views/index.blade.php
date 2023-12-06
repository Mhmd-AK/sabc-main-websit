@extends('includes.main')

@section('content')

    <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 85}">
        <div class="header-body border-top-0">
            <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
                <div class="container">
                    <div class="header-row">
                        <div class="header-column justify-content-between">
                            <div class="header-row">
                                <nav class="header-nav-top w-100 w-md-50pct w-xl-100pct">
                                    <ul class="nav nav-pills d-inline-flex custom-header-top-nav-background pe-5">
                                        <li class="nav-item py-2 d-inline-flex z-index-1">
													<span class="d-flex align-items-center p-0">
														<span>
															<img width="25"
                                                                src="{{asset('frontend/img/demos/business-consulting-3/icons/phone.svg')}}"
                                                                alt="Phone Icon" data-icon
                                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}"/>
														</span>
														<a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                            href="tel:{{config('global.phone')}}"
                                                            data-cursor-effect-hover="plus"
                                                            data-cursor-effect-hover-color="light">{{config('global.phone')}}</a>
													</span>
                                            <span
                                                class="font-weight-normal align-items-center px-0 d-none d-xl-flex ms-3">
														<span>
															<img width="25"
                                                                src="{{asset('frontend/img/demos/business-consulting-3/icons/email.svg')}}"
                                                                alt="Email Icon" data-icon
                                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}"/>
														</span>
														<a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                            href="mailto:{{config('global.email')}}"
                                                            data-cursor-effect-hover="plus"
                                                            data-cursor-effect-hover-color="light">{{config('global.email')}}</a>
													</span>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="d-flex align-items-end flex-row-reverse w-100">
                                    {{--                                    <ul class="ps-0 ms-auto mb-0">--}}
                                    {{--                                        <li class="nav-item font-weight-semibold text-1 text-lg-2 text-color-dark d-none d-md-flex justify-content-end me-3">--}}
                                    {{--                                            SUN - THU 9:00am - 6:00pm / FRIDAY - CLOSED--}}
                                    {{--                                        </li>--}}
                                    {{--                                    </ul>--}}
                                    <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ms-lg-2">
                                        <li class="social-icons-instagram">
                                            <a href="{{config('global.instagram')}}" target="_blank" class="text-4"
                                                title="Instagram" data-cursor-effect-hover="fit"><i
                                                    class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="social-icons-twitter">
                                            <a href="{{config('global.twitter')}}" target="_blank" class="text-4"
                                                title="Twitter" data-cursor-effect-hover="fit"><i
                                                    class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="social-icons-facebook">
                                            <a href="{{config('global.facebook')}}" target="_blank" class="text-4"
                                                title="Linkedin" data-cursor-effect-hover="fit"><i
                                                    class="fab fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-container container" style="height: 117px;">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="#">
                                    <img alt="SABC" class="d-none d-lg-block" style="width:360px; height: 100px;"
                                        src="{{asset('frontend/img/demos/business-consulting-3/header-logo.webp')}}">
                                    <img alt="SABC" class="d-lg-none" style="width:240px; height: 40px;"
                                        src="{{asset('frontend/img/demos/business-consulting-3/header-logo-mobile.webp')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end w-100">
                        <div class="header-row">
                            <div class="header-nav header-nav-links order-2 order-lg-1">
                                <div
                                    class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li>
                                                <a class="nav-link active" href="#header">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="#about-us">
                                                    About Us
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="nav-link" href="#services">
                                                    Sectors
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="nav-link" href="#why-us">
                                                    Why Us
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="nav-link" href="#our-mission">
                                                    Our Mission
                                                </a>
                                            </li>

                                            <li class="d-lg-none">
                                                <a class="nav-link" style="border-radius: 10px !important;"
                                                    href="#get-in-touch">
                                                    Contact Us
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="header-column header-column-search justify-content-end align-items-center d-flex w-auto flex-row">
                        <a href="#get-in-touch"
                            class="btn btn-dark custom-btn-style-1 font-weight-semibold text-3-5 btn-px-3 py-2 ws-nowrap ms-4 d-none d-lg-block"
                            style="border-radius: 10px !important;" data-cursor-effect-hover="plus"
                            data-cursor-effect-hover-color="light"><span>Contact Us</span></a>
                        <div class="header-nav-features header-nav-features-no-border">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle text-decoration-none"
                                    data-focus="headerSearch" aria-label="Search">
                                    <i class="icons icon-magnifier header-nav-top-icon text-3-5 text-color-dark text-color-hover-primary font-weight-semibold top-3"></i>
                                </a>
                                <div
                                    class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0"
                                    id="headerTopSearchDropdown">
                                    <form role="search" action="#" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search"
                                                    value="" placeholder="Search...">
                                            <button class="btn" type="submit" aria-label="Search">
                                                <i class="icons icon-magnifier header-nav-top-icon text-color-dark text-color-hover-primary top-2"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main" >

        <section class="section section-height-3 section-with-shape-divider position-relative border-0 m-0"
                data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%'}"
                data-image-src="{{asset('frontend/img/demos/business-consulting-3/backgrounds/background-1.jpg')}}">
            <img src="{{asset('frontend/img/demos/business-consulting-3/backgrounds/header.webp')}}"
                class="img-fluid position-absolute top-0 right-0 d-none d-md-block appear-animation"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" alt=""/>
            <div class="container pb-5 pb-xl-0 mt-md-3 mb-5">
                <div class="row">
                    <div class="col-md-7 col-lg-12">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="0">
                            <h1 class="custom-text-background custom-big-font-size-1 text-14 font-weight-bold float-xl-end clearfix line-height-1 custom-ws-mobile-wrap ws-nowrap pb-2 mb-3 mb-xl-5"
                                data-plugin-float-element
                                data-plugin-options="{'startPos': 'top', 'speed': 0.6, 'transition': true, 'horizontal': true, 'transitionDuration': 1000, 'isInsideSVG': true}"
                                style="background-image: url(frontend/img/demos/business-consulting-3/backgrounds/text.webp);">
                                STRATEGY EXECUTION</h1>
                        </div>
                    </div>
                </div>
                <div class="row pb-5 mb-5">
                    <div class="col-md-7 col-xl-5 pb-5 pb-xl-0 mb-5">
                        <strong
                            class="d-block font-weight-semibold text-color-dark text-5-5 line-height-4 mb-3 pb-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">WE CONSOLIDATE
                            <span class="custom-highlight-text-1 font-weight-bold">FOR YOUR BUSINESS!</span></strong>
                        <p class="text-3-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="750">The <b style="color: #15293a;">Saudi Advanced Business
                                Holding Company</b> is keen to provide distinguished services through its specialized
                            and diversified companies, to support the business, and to find innovative solutions to meet
                            the needs of its customers, according to the highest quality standards in pursuit toward
                            excellence, to contribute to the business development process That is the basis of the
                            Kingdom's 2030 vision. </p>
                        {{--                        <a href="#" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="d-inline-flex align-items-center text-decoration-none appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">--}}
                        {{--                            Contact Us--}}
                        {{--                        </a>--}}
                    </div>
                </div>
            </div>
            <div class="shape-divider shape-divider-bottom" style="height: 212px;">
                <div class="shape-divider-horizontal-animation shape-divider-horizontal-animation-to-left">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 1920 212" preserveAspectRatio="xMinYMin">
                        <polygon fill="#ED3326" points="0,75 479,161 1357,28 1701,56 1920,26 1920,213 0,212 "/>
                        <polygon fill="#F1F3CE" points="0,91 481,177 1358,44 1702,72 1920,42 1920,212 0,212 "/>
                    </svg>
                </div>
            </div>
        </section>


{{--        <div class="container" id="about-us" style="margin-top: -310px;">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-7 ms-xl-auto">--}}
{{--                    <div class="owl-carousel owl-theme custom-carousel-box-shadow-1 custom-dots-style-1 mb-0"--}}
{{--                         data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 20, 'loop': false, 'nav': false, 'autoplay': true, 'autoplayTimeout': 5000, 'dots': true}"--}}
{{--                         style="height: 398px;">--}}
{{--                        <div>--}}
{{--                            <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                               data-cursor-effect-hover="plus">--}}
{{--                                <div class="card border-0">--}}
{{--                                    <div class="card-body text-center py-5">--}}
{{--                                        <img width="75" height="75"--}}
{{--                                             src="{{asset('frontend/img/demos/business-consulting-3/icons/like.svg')}}"--}}
{{--                                             alt="" data-icon data-plugin-options="{'onlySVG': true}"--}}
{{--                                             style="width: 75px; height: 75px;"/>--}}
{{--                                        <div class="custom-crooked-line">--}}
{{--                                            <img width="154" height="26"--}}
{{--                                                 src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"--}}
{{--                                                 alt="" data-icon--}}
{{--                                                 data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"--}}
{{--                                                 style="width: 154px; height: 26px;"/>--}}
{{--                                        </div>--}}
{{--                                        <h2 class="text-5 font-weight-semibold mb-1">Customer Centrality</h2>--}}
{{--                                        <p class="pb-1 mb-2">Customers first, our priority is satisfaction. </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                               data-cursor-effect-hover="plus">--}}
{{--                                <div class="card border-0">--}}
{{--                                    <div class="card-body text-center py-5">--}}
{{--                                        <img width="75" height="75"--}}
{{--                                             src="{{asset('frontend/img/demos/business-consulting-3/icons/success.svg')}}"--}}
{{--                                             alt="" data-icon--}}
{{--                                             data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"--}}
{{--                                             style="width: 75px; height: 75px;"/>--}}
{{--                                        <div class="custom-crooked-line">--}}
{{--                                            <img width="154" height="26"--}}
{{--                                                 src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"--}}
{{--                                                 alt="" data-icon--}}
{{--                                                 data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"--}}
{{--                                                 style="width: 154px; height: 26px;"/>--}}
{{--                                        </div>--}}
{{--                                        <h2 class="text-5 font-weight-semibold mb-1">Success Indicators</h2>--}}
{{--                                        <p class="pb-1 mb-2">Metrics guide us toward continual improvement. </p>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                               data-cursor-effect-hover="plus">--}}
{{--                                <div class="card border-0">--}}
{{--                                    <div class="card-body text-center py-5">--}}
{{--                                        <img width="75" height="75"--}}
{{--                                             src="{{asset('frontend/img/demos/business-consulting-3/icons/quality.svg')}}"--}}
{{--                                             alt="" data-icon data-plugin-options="{'onlySVG': true}"--}}
{{--                                             style="width: 75px; height: 75px;"/>--}}
{{--                                        <div class="custom-crooked-line">--}}
{{--                                            <img width="154" height="26"--}}
{{--                                                 src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"--}}
{{--                                                 alt="" data-icon--}}
{{--                                                 data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"--}}
{{--                                                 style="width: 154px; height: 26px;"/>--}}
{{--                                        </div>--}}
{{--                                        <h2 class="text-5 font-weight-semibold mb-1">Quality and Excellence </h2>--}}
{{--                                        <p class="pb-1 mb-2">Striving for excellence in all endeavors. </p>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                               data-cursor-effect-hover="plus">--}}
{{--                                <div class="card border-0">--}}
{{--                                    <div class="card-body text-center py-5">--}}
{{--                                        <img width="75" height="75"--}}
{{--                                             src="{{asset('frontend/img/demos/business-consulting-3/icons/innovation.svg')}}"--}}
{{--                                             alt="" data-icon data-plugin-options="{'onlySVG': true}"--}}
{{--                                             style="width: 75px; height: 75px;"/>--}}
{{--                                        <div class="custom-crooked-line">--}}
{{--                                            <img width="154" height="26"--}}
{{--                                                 src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"--}}
{{--                                                 alt="" data-icon--}}
{{--                                                 data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"--}}
{{--                                                 style="width: 154px; height: 26px;"/>--}}
{{--                                        </div>--}}
{{--                                        <h2 class="text-5 font-weight-semibold mb-1">Innovation </h2>--}}
{{--                                        <p class="pb-1 mb-2">Constantly seeking creative solutions and progress.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!---->--}}
{{--                </div>--}}
{{--            </div>--}}



{{--            <div id="aboutus" class="row align-items-xl-center pt-4 mt-5">--}}
{{--                <div class="col-md-10 col-lg-6 mb-5 mb-lg-0">--}}
{{--                    <div class="row row-gutter-sm">--}}
{{--                        <div class="col-6">--}}
{{--                            <img src="{{asset('frontend/img/demos/business-consulting-3/generic/about-us-1.webp')}}"--}}
{{--                                 class="img-fluid box-shadow-5" alt=""/>--}}
{{--                        </div>--}}
{{--                        <div class="col-6">--}}
{{--                            <img src="{{asset('frontend/img/demos/business-consulting-3/generic/about-us-3.webp')}}"--}}
{{--                                 class="img-fluid box-shadow-5 mb-4" alt=""/>--}}
{{--                            <img src="{{asset('frontend/img/demos/business-consulting-3/generic/about-us-2.webp')}}"--}}
{{--                                 class="img-fluid box-shadow-5" alt=""/>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 ps-lg-4 ps-xl-5">--}}
{{--                    <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"--}}
{{--                        data-appear-animation="fadeInUpShorter">ABOUT US</h2>--}}
{{--                    <h3 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation"--}}
{{--                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">We deliver the most--}}
{{--                        advanced strategies for your business</h3>--}}
{{--                    <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation"--}}
{{--                       data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"><b--}}
{{--                            style="color: #15293a;">SABC</b> is a company specialized in business support and management--}}
{{--                        services, training and skills development that companies, economic and commercial entities needs--}}
{{--                        across the region, as well as providing qualified human cadres and providing the required--}}
{{--                        environment for the success of these companies ‘projects, while speeding completion, reducing--}}
{{--                        the risks of establishing projects, and contributing to transferring them to real projects and--}}
{{--                        successful business. </p>--}}
{{--                    <div class="row align-items-center pb-2 mb-4 mb-lg-1 mb-xl-4 appear-animation"--}}
{{--                         data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">--}}
{{--                        --}}{{--                        <div class="col-5">--}}
{{--                        --}}{{--                            <div class="d-flex">--}}
{{--                        --}}{{--                                <img width="63" height="63" src="{{asset('frontend/img/demos/business-consulting-3/icons/label.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'd-lg-none d-xl-block'}" />--}}
{{--                        --}}{{--                                <span class="text-3 font-weight-bold text-color-dark pt-2 ms-2">--}}
{{--                        --}}{{--											<strong class="d-block font-weight-bold text-9 mb-2">240+</strong>--}}
{{--                        --}}{{--											Satisfied Clients--}}
{{--                        --}}{{--										</span>--}}
{{--                        --}}{{--                            </div>--}}
{{--                        --}}{{--                        </div>--}}
{{--                        --}}{{--                        <div class="col-7">--}}
{{--                        --}}{{--                            <blockquote class="custom-blockquote-style-1 m-0 pt-1 pb-2">--}}
{{--                        --}}{{--                                <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse. </p>--}}
{{--                        --}}{{--                            </blockquote>--}}
{{--                        --}}{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"--}}
{{--                         data-appear-animation-delay="1000">--}}
{{--                         <!------}}
{{--                        <a href="#get-in-touch"--}}
{{--                           class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5 "--}}
{{--                           style="border-radius: 10px !important;" data-cursor-effect-hover="plus"--}}
{{--                           data-cursor-effect-hover-color="light"><span>Get in Touch</span></a>--}}
{{--                        !---->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="container-fluid pt-5 mt-5 mb-4">
            <div class="row">
                <div class="col appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="250">
                    <br>
                    <br>
                    <div style="text-align: center;">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Our Work</h2>
                    </div>

                    <div style="text-align: center;">
                        <h3 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Relevant Organizations</h3>
                    </div>

                    <div
                        class="owl-carousel owl-theme carousel-center-active-item custom-carousel-vertical-center-items custom-dots-style-1"
                        data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 3}, '768': {'items': 3}, '992': {'items': 5}, '1200': {'items': 5}, '1600': {'items': 7}}, 'autoplay': false, 'autoplayTimeout': 3000, 'dots': true}">
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{asset('frontend/img/logos/134x71.webp')}}"
                                alt="" style="max-width: 200px;"/>
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{asset('frontend/img/logos/328x84.webp')}}"
                                alt="" style="max-width: 200px;"/>
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{asset('frontend/img/logos/302x34.webp')}}"
                                alt="" style="max-width: 200px;"/>
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{asset('frontend/img/logos/402x126.webp')}}"
                                alt="" style="max-width: 200px;"/>
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{asset('frontend/img/logos/185x71.webp')}}"
                                alt="" style="max-width: 200px;"/>
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{asset('frontend/img/logos/296x115.webp')}}"
                                alt="" style="max-width: 200px;"/>
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{asset('frontend/img/logos/281x77.webp')}}"
                                alt="" style="max-width: 200px;"/>
                        </div>
                        <div class="text-center">
                            <img class="d-inline-block img-fluid" src="{{asset('frontend/img/logos/197x177.webp')}}"
                                alt="" style="max-width: 200px;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="services" class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 m-0">
            <div class="shape-divider" style="height: 123px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                    <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
                    <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
                </svg>
            </div>
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-xl-10 text-center">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">SECTORS</h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Our Premium
                            Sectors</h3>
                        <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="750">to be the leading company in providing specialized and
                            facilitated business services to economic entities to enable them to achieve their growth
                            targets and success objectives. </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel owl-theme custom-dots-style-1 mb-0"
                            data-plugin-options="{'responsive': {'1200': {'items': 1}, '1200': {'items': 2}, '1200': {'items': 3}, '1200': {'items': 4}}, 'margin': 20, 'loop': true, 'nav': false, 'dots': true, 'lazyLoad' : false, 'lazyFollow' : false}">
                            <div>
{{--                                <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                                   data-cursor-effect-hover="plus">--}}
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                        src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                        style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/medical-services.webp')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Medical Services</h4>
                                            <p class="text-3-5 mb-0">Comprehensive care for your well-being </p>
                                        </div>
                                    </div>
{{--                                </a>--}}
                            </div>
                            <div>
{{--                                <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                                   data-cursor-effect-hover="plus">--}}
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                        src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                        style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/call-center.webp')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Business Mediation</h4>
                                            <p class="text-3-5 mb-0">Through solid relations and network, your business growth is easier. </p>
                                        </div>
                                    </div>
{{--                                </a>--}}
                            </div>
                            <div>
{{--                                <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                                   data-cursor-effect-hover="plus">--}}
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                        src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                        style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/advertising.webp')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Advertising Services </h4>
                                            <p class="text-3-5 mb-0">Crafting messages that captivate and resonate. </p>
                                        </div>
                                    </div>
{{--                                </a>--}}
                            </div>
                            <div>
{{--                                <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                                   data-cursor-effect-hover="plus">--}}
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                        src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                        style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/HR.webp')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">HR Solutions</h4>
                                            <p class="text-3-5 mb-0">Recruitment, operations, cadre hiring, Saudization—diverse solutions. </p>
                                        </div>
                                    </div>
{{--                                </a>--}}
                            </div>
                            <div>
{{--                                <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                                   data-cursor-effect-hover="plus">--}}
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                        src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                        style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/training.webp')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Training Services</h4>
                                            <p class="text-3-5 mb-0">Empower, educate, and enhance your skills. </p>
                                        </div>
                                    </div>
{{--                                </a>--}}
                            </div>
                            <div>
{{--                                <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                                   data-cursor-effect-hover="plus">--}}
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                        src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                        style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/it-services.webp')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Real Estate Consultations.</h4>
                                            <p class="text-3-5 mb-0">Professional real estate consultations and solutions. </p>
                                        </div>
                                    </div>
{{--                                </a>--}}
                            </div>
                            <div>
{{--                                <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                                   data-cursor-effect-hover="plus">--}}
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                        src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                        style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/event-solution.webp')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Event Solutions</h4>
                                            <p class="text-3-5 mb-0">Crafting memorable event experiences. </p>
                                        </div>
                                    </div>
{{--                                </a>--}}
                            </div>
                            <div>
{{--                                <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                                   data-cursor-effect-hover="plus">--}}
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                        src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                        style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/construction.webp')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Construction Contracting.</h4>
                                            <p class="text-3-5 mb-0">Specialized construction services, delivering excellence consistently. </p>
                                        </div>
                                    </div>
{{--                                </a>--}}
                            </div>
                            <div>
{{--                                <a href="#" class="custom-link-hover-effects text-decoration-none"--}}
{{--                                   data-cursor-effect-hover="plus">--}}
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                        src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                        style="width: 154px;"/>
                                                </div>
                                            </div>
                                                                                        <img src="{{asset('frontend/img/demos/business-consulting-3/team/engineering.webp')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Elevators Engineering.</h4>
                                            <p class="text-3-5 mb-0">Elevator engineering: innovative solutions, reliable expertise. </p>
                                        </div>
                                    </div>
{{--                                </a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="why-us" class="section section-height-4 section-with-shape-divider position-relative bg-dark border-0 m-0">
            <div class="shape-divider shape-divider-reverse-x z-index-3" style="height: 102px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
                    <polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 "/>
                    <polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 "/>
                </svg>
            </div>
            <div
                class="position-absolute top-0 left-0 h-100 d-none d-lg-block overlay overlay-show overlay-color-primary"
                data-plugin-parallax data-plugin-options="{'speed': 1.5}"
                data-image-src="{{asset('frontend/img/demos/business-consulting-3/parallax/parallax-1.jpg')}}"
                style="width: 40%;"></div>
            <div class="container position-relative z-index-3 pt-5 mt-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="custom-text-background custom-big-font-size-1 text-15 font-weight-bold float-end clearfix line-height-1 lazyload pe-xl-5 me-3 mb-0 d-none d-lg-block"
                            data-bg-src="{{asset('frontend/img/demos/business-consulting-3/backgrounds/BENEFITS.webp')}}"
                            data-plugin-float-element
                            data-plugin-options="{'startPos': 'top', 'speed': 0.6, 'transition': true, 'horizontal': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            BENEFITS</h2>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">WHY US</h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-medium text-color-light ls-0 mb-3 pb-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Learn Here The
                            Main Reasons Why You Should Choose Us</h3>
                        <p class="text-3-5 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="750">Our values shape the features of our progress and
                            achievements; they also mark our services to customers from whom we infer our success
                            indicators. </p>
                        <ul class="list ps-0 pe-lg-5 mb-0">
                            <li class="d-flex align-items-start pb-1 mb-3 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                <i class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">We wil identify where you're getting off-track in all areas and not just</span>
                            </li>
                            <li class="d-flex align-items-start pb-1 mb-3 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
                                <i class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">We create a program that accelerates your strategic execution and growth goals.
										</span>
                            </li>
                            <li class="d-flex align-items-start appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">
                                <i class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">Consistently hit strategic objectives and revenue targets, and grow, year over year.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div id="our-mission" class="container">
            <div class="row align-items-center py-4 my-5 mb-lg-0 my-xl-5">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <h2 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4">Our Mission</h2>
                    <p class="text-3-5 pb-3 mb-4">To deliver unparalleled services, solutions, and support to our valued customers, we leverage our accumulated and distinguished expertise. Our commitment is to create an optimal environment for development, innovation, and accomplishment that aligns with the aspirations of our customers. As a leading company, we specialize in providing tailored and streamlined business services to economic entities, empowering them to reach their growth targets and achieve their success objectives. </p>
                    <div class="progress-bars pb-4">
                        <!----
                        <div class="progress-label d-flex justify-content-between">
                            <span class="text-color-dark font-weight-semibold text-2">STRATEGY ACCELERATION</span>
                            <span class="text-color-dark font-weight-semibold text-2">90%</span>
                        </div>
                        <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-1 mb-4">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="90%"></div>
                        </div>

                        <hr class="my-0">

                        <div class="progress-label d-flex justify-content-between pt-2">
                            <span class="text-color-dark font-weight-semibold text-2">REVENUE GROWTH</span>
                            <span class="text-color-dark font-weight-semibold text-2">80%</span>
                        </div>
                        <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-1 mb-4">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="80%"></div>
                        </div>

                        <hr class="my-0">

                        <div class="progress-label d-flex justify-content-between pt-2">
                            <span class="text-color-dark font-weight-semibold text-2">FIREWALK SALES</span>
                            <span class="text-color-dark font-weight-semibold text-2">50%</span>
                        </div>
                        <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-1 mb-4">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="50%"></div>
                        </div>
                        !---->
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{asset('frontend/img/demos/business-consulting-3/generic/mission.webp')}}"
                        class="img-fluid" alt=""/>
                </div>
            </div>
        </div>
        <!----
        <section class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 m-0">
            <div class="shape-divider" style="height: 123px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                    <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
                    <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
                </svg>
            </div>

            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-xl-10 text-center">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">THE MEMBERS</h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Our Amazing Team</h3>
                        <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="owl-carousel owl-theme custom-dots-style-1 mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 5}}, 'margin': 20, 'loop': false, 'nav': false, 'dots': true}" style="height: 512px;">
                            <div>
                                <a href="demo-business-consulting-3-team.html#john" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26" src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;" />
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/team-1.jpg')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">John Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26" src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;" />
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/team-2.jpg')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Robert Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="demo-business-consulting-3-team.html#jessica" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26" src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;" />
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/team-3.jpg')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Jessica Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26" src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;" />
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/team-4.jpg')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Monica Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26" src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;" />
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/team-5.jpg')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Chris Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26" src="{{asset('frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 154px;" />
                                                </div>
                                            </div>
                                            <img src="{{asset('frontend/img/demos/business-consulting-3/team/team-1.jpg')}}" class="img-fluid" alt="John Doe" />
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">John Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        !---->

        <section id="get-in-touch" class="section section-with-shape-divider position-relative bg-dark border-0 m-0">
            <div class="shape-divider shape-divider-reverse-x z-index-3" style="height: 102px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
                    <polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 "/>
                    <polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 "/>
                </svg>
            </div>
            <div
                class="position-absolute top-0 right-0 overlay overlay-show overlay-color-primary overlay-op-9 h-100 lazyload d-none d-md-block"
                data-bg-src="{{asset('frontend/img/demos/business-consulting-3/backgrounds/get-in-touch.webp')}}"
                style="width: 32%; background-size: cover; background-position: center;"></div>
            <div class="container">
                <div class="row align-items-center pt-5 pb-xl-5 mt-5">
                    <div class="col-md-7 col-lg-8 py-4 my-2 ms-md-3 ms-lg-0">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">GET IN TOUCH</h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-medium text-color-light ls-0 mb-3 pb-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Send Us a Message
                            and Learn More About Our Services</h3>
                        <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="750">Send us a message today and discover how our services can
                            elevate your business to new heights! </p>
                        <form
                            class="contact-form form-style-4 form-placeholders-light form-errors-light appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                            action="php/contact-form.php" method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                            maxlength="100"
                                            class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                            name="name" placeholder="* Full Name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <input type="email" value="" data-msg-required="Please enter your email address."
                                            data-msg-email="Please enter a valid email address." maxlength="100"
                                            class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                            name="email" placeholder="* Email Address" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                                                class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                                name="message" placeholder="* Message" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="1250">
                                    <button type="submit"
                                            class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                                            style="border-radius: 10px !important;" data-loading-text="Loading..."
                                            data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                                        <span>Send Message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        {{--        <section class="section section-height-3 border-0 m-0 lazyload" data-bg-src="{{asset('frontend/img/demos/business-consulting-3/backgrounds/background-3.jpg')}}">--}}
        {{--            <div class="container py-4">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col text-center">--}}
        {{--                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">TESTIMONIALS</h2>--}}
        {{--                        <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold text-color-dark pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">What People Say</h3>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="row justify-content-center">--}}
        {{--                    <div class="col-lg-11 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">--}}
        {{--                        <div class="owl-carousel owl-theme custom-nav-style-1 nav-style-1 nav-svg-arrows-1 nav-outside custom-dots-style-2 bg-light box-shadow-4 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true}, '768': {'items': 1}, '992': {'items': 1, 'nav': true, 'dots': false}, '1200': {'items': 1, 'nav': true, 'dots': false}}, 'loop': false, 'autoHeight': true}">--}}
        {{--                            <div class="py-5 px-lg-5">--}}
        {{--                                <div class="testimonial testimonial-style-2 px-4 mx-xl-5 my-3">--}}
        {{--                                    <img width="40" height="40" src="{{asset('frontend/img/demos/business-consulting-3/icons/left-quote.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 40px;" />--}}
        {{--                                    <blockquote>--}}
        {{--                                        <p class="text-color-dark text-4 line-height-8 alternative-font-4 mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>--}}
        {{--                                    </blockquote>--}}
        {{--                                    <div class="testimonial-author">--}}
        {{--                                        <p>--}}
        {{--                                            <strong class="font-weight-bold text-5-5 negative-ls-1">- John Doe</strong>--}}
        {{--                                        <p class="text-color-dark mb-0">Porto Founder</p>--}}
        {{--                                        </p>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                            <div class="py-5 px-lg-5">--}}
        {{--                                <div class="testimonial testimonial-style-2 px-4 mx-xl-5 my-3">--}}
        {{--                                    <img width="40" height="40" src="{{asset('frontend/img/demos/business-consulting-3/icons/left-quote.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 40px;" />--}}
        {{--                                    <blockquote>--}}
        {{--                                        <p class="text-color-dark text-4 line-height-8 alternative-font-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
        {{--                                    </blockquote>--}}
        {{--                                    <div class="testimonial-author">--}}
        {{--                                        <p>--}}
        {{--                                            <strong class="font-weight-bold text-5-5 negative-ls-1">- John Smith</strong>--}}
        {{--                                        <p class="text-color-dark mb-0">Porto Founder</p>--}}
        {{--                                        </p>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}

        <!----
        <div class="container py-5 my-4">
            <div class="row justify-content-center pt-3">
                <div class="col-lg-10 text-center">
                    <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">THE BLOG</h2>
                    <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Our Recent News</h3>
                    <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>
                </div>
            </div>
            <div class="row row-gutter-sm justify-content-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <a href="#" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                        <div class="card border-0 box-shadow-4">
                            <div class="card-img-top position-relative overlay">
                                <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
											<span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
												<span class="position-relative z-index-2">
													18
													<span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
												</span>
											</span>
                                </div>
                                <img src="{{asset('frontend/img/demos/business-consulting-3/blog/blog-1.jpg')}}" class="img-fluid" alt="Lorem Ipsum Dolor" />
                            </div>
                            <div class="card-body p-4">
                                <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">FINANCE</span>
                                <h4 class="font-weight-semibold text-5 text-color-hover-primary mb-2">Lorem ipsum dolor sit a met, consectetur</h4>
                                <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
											View More
											<img width="27" height="27" src="{{asset('frontend/img/demos/business-consulting-3/icons/arrow-right.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" style="width: 27px;" />
										</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <a href="#" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                        <div class="card border-0 box-shadow-4">
                            <div class="card-img-top position-relative overlay">
                                <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
											<span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
												<span class="position-relative z-index-2">
													15
													<span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
												</span>
											</span>
                                </div>
                                <img src="{{asset('frontend/img/demos/business-consulting-3/blog/blog-2.jpg')}}" class="img-fluid" alt="Lorem Ipsum Dolor" />
                            </div>
                            <div class="card-body p-4">
                                <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">FINANCE</span>
                                <h4 class="font-weight-semibold text-5 text-color-hover-primary mb-2">Lorem ipsum dolor sit a met, consectetur</h4>
                                <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
											View More
											<img width="27" height="27" src="{{asset('frontend/img/demos/business-consulting-3/icons/arrow-right.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" style="width: 27px;" />
										</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4">
                    <a href="#" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                        <div class="card border-0 box-shadow-4">
                            <div class="card-img-top position-relative overlay">
                                <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
											<span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
												<span class="position-relative z-index-2">
													12
													<span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
												</span>
											</span>
                                </div>
                                <img src="{{asset('frontend/img/demos/business-consulting-3/blog/blog-3.jpg')}}" class="img-fluid" alt="Lorem Ipsum Dolor" />
                            </div>
                            <div class="card-body p-4">
                                <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">FINANCE</span>
                                <h4 class="font-weight-semibold text-5 text-color-hover-primary mb-2">Lorem ipsum dolor sit a met, consectetur</h4>
                                <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
											View More
											<img width="27" height="27" src="{{asset('frontend/img/demos/business-consulting-3/icons/arrow-right.svg')}}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" style="width: 27px;" />
										</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        !---->

    </div>


@endsection
