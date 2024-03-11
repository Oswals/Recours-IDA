@extends('frontend.main_master')
@section('content')

    <!-- slider area start -->
    <div class="tp-slider__area ">
        <div class="hero-active swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide ">
                    <div
                        class="slider-item single-slider tp-slider-overlay tp-slider__height d-flex align-items-center p-relative z-index-1 fix">
                        <div class="tp-slider__bg" data-background="{{ asset('frontend/assets/img/bg/back_ground_1.png')}}"  ></div>
                        <div class="tp-slider__shap">
                            <img class="shap-1" src="{{ asset('frontend/assets/img/slider/shape.png')}}" alt="">
                        </div>
                        <div class="tp-slider__shap-right  float-bob-y">
                            <img class="shap-right" src="{{ asset('frontend/assets/img/slider/shape6.png')}}" alt="">
                        </div>
                        <div class="tp-slider__angle-shape"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="tp-slider__content p-relative z-index-1">
                                        <span class="tp-slider-sub-title">We Are Best Insurance Company</span>
                                        <h2 class="tp-slider-title mb-45">Get insurez <br> for your better <br> future
                                            life
                                        </h2>
                                        <div class="tp-slide-btn-box">
                                            <a class="tp-btn" href="about.html" style="background-color: #E03A3C; color: white;">let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div
                        class="slider-item single-slider tp-slider-overlay tp-slider__height d-flex align-items-center p-relative z-index-1 fix">
                        <div class="tp-slider__bg" data-background="{{ asset('frontend/assets/img/bg/back_ground_2.png')}}"></div>
                        <div class="tp-slider__shap">
                            <img class="shap-1" src="{{ asset('frontend/assets/img/slider/shape.png')}}" alt="">
                        </div>
                        <div class="tp-slider__shap-right  float-bob-y">
                            <img class="shap-right" src="{{ asset('frontend/assets/img/slider/shape6.png')}}" alt="">
                        </div>
                        <div class="tp-slider__angle-shape"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="tp-slider__content p-relative z-index-1">
                                        <span class="tp-slider-sub-title">We Are Best Insurance Company</span>
                                        <h2 class="tp-slider-title mb-45">Get insurez <br> for your better <br> future
                                            life
                                        </h2>
                                        <div class="tp-slide-btn-box">
                                            <a class="tp-btn" href="about.html" style="background-color: ">let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div
                        class="slider-item single-slider tp-slider-overlay tp-slider__height d-flex align-items-center p-relative z-index-1 fix">
                        <div class="tp-slider__bg" data-background="{{ asset('frontend/assets/img/bg/back_ground_3.png')}}"></div>
                        <div class="tp-slider__shap">
                            <img class="shap-1" src="{{ asset('frontend/assets/img/slider/shape.png')}}" alt="">
                        </div>
                        <div class="tp-slider__shap-right  float-bob-y">
                            <img class="shap-right" src="{{ asset('frontend/assets/img/slider/shape6.png')}}" alt="">
                        </div>
                        <div class="tp-slider__angle-shape"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="tp-slider__content p-relative z-index-1">
                                        <span class="tp-slider-sub-title">We Are Best Insurance Company</span>
                                        <h2 class="tp-slider-title mb-45">Get insurez <br> for your better <br> future
                                            life
                                        </h2>
                                        <div class="tp-slide-btn-box">
                                            <a class="tp-btn" href="about.html">let’s Get Started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-slider__nav">
            <button class="hero-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></button>
            <button class="hero-button-prev"> <i class="fa-regular fa-arrow-left"></i></button>
        </div>
        {{--<div class="tp-slider__social-horizonter">
            <ul>
                <li><a href="#">INSTAGRAM</a></li>
                <li><a href="#">TWITTER</a></li>
                <li><a href="#">FACEBOOK</a></li>
            </ul>
        </div>--}}
    </div>
    <!-- slider area end -->
    <!-- feature area start -->
    <div class="tp-feature-3__area p-relative fix pt-120 pb-90 grey-bg-1">
        <div class="tp-feature-3__bg-amg">
            <img src="{{ asset('frontend/assets/img/features/features-shap-bg.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6  col-lg-6">
                    <div class="tp-section-box text-start mb-30">
                        <div class="tp-section-subtitle mb-10">WHAT WE OFFER</div>
                        <h2 class="tp-section-title mb-10">Key Features For your
                            Insurance Business</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <p class="tp-section-pre mt-60">Integer mollis eleifend cursus. Nulla scelerisque quis facilisi. Integer
                        ipsum orci, scelerisque quis viverra nec, rhoncus vel felis. Praesent nec velit id lectus pharetra
                        dapibus sed eget nisi. Vestibulum finibus </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="tp-features-3 wow fadeInUp" data-wow-duration="1.5s"
                         data-wow-delay="300ms">
                        <div class="tp-features-3__item p-relative mb-25">
                            <div class="tp-features-3__img">
                                <img class="w-100" src="{{ asset('frontend/assets/img/features/img-bg.jpg')}}" alt="">
                            </div>
                            <div class="tp-features-3__info">
                                <div class="tp-features-3__icon pb-95">
                                    <i class="flaticon-house"></i>
                                </div>
                                <div class="tp-features-3__content">
                                    <h3 class="tp-features-3__title">Safe & Reliable</h3>
                                    <p>Lorem ipsum dolor sit aconsectetur
                                        adipiscing elit, sed do</p>
                                </div>
                            </div>
                            <div class="tp-features-3__bg-number">
                                <h2>01</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="tp-features-3 wow fadeInUp" data-wow-duration="1.5s"
                         data-wow-delay="600ms">
                        <div class="tp-features-3__item p-relative mb-25">
                            <div class="tp-features-3__img">
                                <img class="w-100" src="{{ asset('frontend/assets/img/features/img-bg-thrd.jpg')}}" alt="">
                            </div>
                            <div class="tp-features-3__info">
                                <div class="tp-features-3__icon pb-95">
                                    <i class="flaticon-save-money"></i>
                                </div>
                                <div class="tp-features-3__content">
                                    <h3 class="tp-features-3__title">Invest your money</h3>
                                    <p>Lorem ipsum dolor sit aconsectetur
                                        adipiscing elit, sed do</p>
                                </div>
                            </div>
                            <div class="tp-features-3__bg-number">
                                <h2>02</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="tp-features-3 wow fadeInUp" data-wow-duration="1.5s"
                         data-wow-delay="900ms">
                        <div class="tp-features-3__item  p-relative mb-25">
                            <div class="tp-features-3__img">
                                <img class="w-100" src="{{ asset('frontend/assets/img/features/img.jpg')}}" alt="">
                            </div>
                            <div class="tp-features-3__info">
                                <div class="tp-features-3__icon pb-95">
                                    <i class="flaticon-save-money-1"></i>
                                </div>
                                <div class="tp-features-3__content">
                                    <h3 class="tp-features-3__title">Get a free quote</h3>
                                    <p>Lorem ipsum dolor sit aconsectetur
                                        adipiscing elit, sed do</p>
                                </div>
                            </div>
                            <div class="tp-features-3__bg-number">
                                <h2>03</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature area end -->
    <!-- About area start -->
    <div class="tp-about-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="tp-about__wapper mb-30 p-relative">
                        <div class="tp-about-before"></div>
                        <div class="tp-about__main-img">
                            <img class="ab-1st-img" src="{{ asset('frontend/assets/img/about/about-img.jpg ')}}" alt="">
                        </div>
                        <div class="tp-about__sec-img">
                            <img src="{{ asset('frontend/assets/img/about/about-sm.jpg')}}" alt="">
                        </div>
                        <div class="tp-about-counter">
                            <div class="tp-about-counter-icon mt-5">
                        <span>
                           <i class="flaticon-people"></i>
                        </span>
                            </div>
                            <div class="counter__item">
                                <div class="counter__content">
                                    <h3 class="counter__title"><span class="counter">965</span>+</h3>
                                    <p>Satisfied Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12 ">
                    <div class="tp-about__wrap ml-85">
                        <div class="tp-about__title-box">
                            <div class="tp-section-subtitle mb-10">KNOW ABOUT INSUREZ</div>
                            <h2 class="tp-section-title mb-20">Insurance for the better
                                family life</h2>
                            <p class="tp-section-pre mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, Quis ipsum
                                suspendisse ultrices </p>
                        </div>
                        <div class="tp-about__content">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="tp-about__save-money mb-20">
                                        <span><i class="flaticon-save-money-2"></i></span>
                                        <div class="tp-about__save-money-content">
                                            <h4>Save Your Money</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do incididunt</p>
                                        </div>
                                    </div>
                                    <div class="tp-about__save-money">
                                        <span> <i class="flaticon-life-insurance"></i></span>
                                        <div class="tp-about__save-money-content">
                                            <h4>Save Your Money</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do incididunt</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="tp-about__trusted-by text-center p-relative">
                                        <div class="tp-about__trusted-by-icon">
                                            <span> <i class="flaticon-medal"></i></span>
                                        </div>
                                        <b>Trusted By <br> Our Clients</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tp-about__btn-box">
                            <div class="tp-about__author mt-40 ">
                                <div class="about-btn mr-30 mb-25">
                                    <a class="tp-btn" href="about.html">DISCOVER MORE</a>
                                </div>
                                <div class="tp-about__author-inner mb-25">
                                    <div class="tp-about__author-thumb">
                                        <img src="{{ asset('frontend/assets/img/about/img-sm.png')}}" alt="">
                                    </div>
                                    <div class="tp-about__author-content">
                                        <h4 class="tp-about__author-title">Stiven Paul</h4>
                                        <span>Co Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About area end -->
    <!-- service area start -->
    <div class="tp-searvice-2 pt-90 pb-90 grey-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="tp-section-box text-center mb-30">
                        <div class="tp-section-subtitle mb-15">SERVICE WE DO</div>
                        <h2 class="tp-section-title mb-50">Our highlighted service <br>
                            for our clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="tp-services-2 pb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                        <div class="tp-services-2__thumb fix p-relative">
                            <div class="tp-services-2__shap"></div>
                            <div class="tp-services-2__thumb-img">
                                <img class="w-100" src="{{ asset('frontend/assets/img/services/service-img8.jp')}}g" alt="">
                            </div>
                            <div class="tp-services-2__icon">
                                <span><a href="Insurance-details.html"><i class="flaticon-house"></i></a></span>
                            </div>
                        </div>
                        <div class="tp-services-2__content">
                            <div class="tp-services-2__content-top">
                                <h4 class="tp-services-title-2 pt-5"><a href="Insurance-details.html">Home Insurance</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore </p>
                            </div>
                            <div class="tp-services-2__content-bottom d-flex align-items-center justify-content-between">
                                <div class="tp-services-2__link  mt-20">
                                    <a href="Insurance-details.html">READ MORE</a>
                                </div>
                                <div class="tp-services-2__right-icon mt-20">
                           <span><a href="Insurance-details.html"> <i
                                       class="fa-solid fa-arrow-right-long"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="tp-services-2 pb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                        <div class="tp-services-2__thumb fix p-relative">
                            <div class="tp-services-2__shap"></div>
                            <div class="tp-services-2__thumb-img">
                                <img class="w-100" src="{{ asset('frontend/assets/img/services/service-img9.jpg')}}" alt="">
                            </div>
                            <div class="tp-services-2__icon">
                                <span><a href="Insurance-details.html"><i class="flaticon-car-insurance"></i></a></span>
                            </div>
                        </div>
                        <div class="tp-services-2__content">
                            <div class="tp-services-2__content-top">
                                <h4 class="tp-services-title-2 pt-5"><a href="Insurance-details.html">Car Insurance</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore </p>
                            </div>
                            <div class="tp-services-2__content-bottom d-flex align-items-center justify-content-between">
                                <div class="tp-services-2__link  mt-20">
                                    <a href="Insurance-details.html">READ MORE</a>
                                </div>
                                <div class="tp-services-2__right-icon mt-20">
                           <span><a href="Insurance-details.html"> <i
                                       class="fa-solid fa-arrow-right-long"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="tp-services-2 pb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="900ms">
                        <div class="tp-services-2__thumb fix p-relative">
                            <div class="tp-services-2__shap"></div>
                            <div class="tp-services-2__thumb-img">
                                <img class="w-100" src="{{ asset('frontend/assets/img/services/service-img10.jpg')}}" alt="">
                            </div>
                            <div class="tp-services-2__icon">
                                <span><a href="Insurance-details.html"><i class="flaticon-life-protection"></i></a></span>
                            </div>
                        </div>
                        <div class="tp-services-2__content">
                            <div class="tp-services-2__content-top">
                                <h4 class="tp-services-title-2 pt-5"><a href="Insurance-details.html">Life Insurance</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                    labore </p>
                            </div>
                            <div class="tp-services-2__content-bottom d-flex align-items-center justify-content-between">
                                <div class="tp-services-2__link  mt-20">
                                    <a href="Insurance-details.html">READ MORE</a>
                                </div>
                                <div class="tp-services-2__right-icon mt-20">
                           <span><a href="Insurance-details.html"> <i
                                       class="fa-solid fa-arrow-right-long"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
    {{--<!-- service area start -->
    <div class="searvice-area grey-bg-1 pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="tp-section-box text-center mb-30">
                        <div class="tp-section-subtitle mb-10">What We Perovide </div>
                        <h2 class="tp-section-title mb-45">We are covering all the <br>
                            insurance field</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tpservices wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="100ms">
                        <div class="tpservices__item mb-30">
                            <div class="tpservices__thumb">
                                <div class="tpservices__service-icon">
                                    <a href=""><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                                <img src="{{ asset('frontend/assets/img/services/service-img.jpg')}}" alt="">
                            </div>
                            <div class="tpservices__content text-left p-relative">
                                <div class="tpservices__icon">
                                    <a href="Insurance-details.html"> <i class="flaticon-car-insurance"></i></a>
                                </div>
                                <h3 class="tpservices__title">
                                    <a href="Insurance-details.html">Car Insurance</a>
                                </h3>
                                <p>Lorem ipsum dolor consectet adipiscing, sed do</p>
                                <div class="tpservices__number">
                                    <div class="tpservices__number-count">
                                        <span>01</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tpservices wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                        <div class="tpservices__item mb-30">
                            <div class="tpservices__thumb">
                                <div class="tpservices__service-icon z-index-2">
                                    <a href=""><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                                <img src="{{ asset('frontend/assets/img/services/service-img11.jpg')}}" alt="">
                            </div>
                            <div class="tpservices__content text-left p-relative">
                                <div class="tpservices__icon">
                                    <a href="Insurance-details.html"> <i class="flaticon-house"></i></a>
                                </div>
                                <h3 class="tpservices__title">
                                    <a href="Insurance-details.html">Home Insurance</a>
                                </h3>
                                <p>Lorem ipsum dolor consectet adipiscing, sed do </p>
                                <div class="tpservices__number">
                                    <div class="tpservices__number-count">
                                        <span>02</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tpservices wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                        <div class="tpservices__item mb-30">
                            <div class="tpservices__thumb">
                                <div class="tpservices__service-icon z-index-2">
                                    <a href=""><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                                <img src="{{ asset('frontend/assets/img/services/service-img7.jpg')}}" alt="">
                            </div>
                            <div class="tpservices__content text-left p-relative">
                                <div class="tpservices__icon">
                                    <a href="Insurance-details.html"> <i class="flaticon-life-protection"></i></a>
                                </div>
                                <h3 class="tpservices__title">
                                    <a href="Insurance-details.html">Life Insurance</a>
                                </h3>
                                <p>Lorem ipsum dolor consectet adipiscing, sed do </p>
                                <div class="tpservices__number">
                                    <div class="tpservices__number-count">
                                        <span>03</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tpservices wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">
                        <div class="tpservices__item mb-30">
                            <div class="tpservices__thumb">
                                <div class="tpservices__service-icon z-index-2">
                                    <a href=""><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                                <img src="{{ asset('frontend/assets/img/services/service-img6.jpg')}}" alt="">
                            </div>
                            <div class="tpservices__content text-left p-relative">
                                <div class="tpservices__icon">
                                    <a href="Insurance-details.html"><i class="flaticon-heartbeat"></i></a>
                                </div>
                                <h3 class="tpservices__title">
                                    <a href="Insurance-details.html">Health Insurance</a>
                                </h3>
                                <p>Lorem ipsum dolor consectet adipiscing, sed do </p>
                                <div class="tpservices__number">
                                    <div class="tpservices__number-count">
                                        <span>04</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tpservices wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="900ms">
                        <div class="tpservices__item mb-30">
                            <div class="tpservices__thumb">
                                <div class="tpservices__service-icon z-index-2">
                                    <a href=""><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                                <img src="{{ asset('frontend/assets/img/services/service-img5.jpg')}}" alt="">

                            </div>
                            <div class="tpservices__content text-left p-relative">
                                <div class="tpservices__icon">
                                    <a href="Insurance-details.html"><i class="flaticon-briefcase"></i></a>
                                </div>
                                <h3 class="tpservices__title">
                                    <a href="Insurance-details.html">Business Insurance</a>
                                </h3>
                                <p>Lorem ipsum dolor consectet adipiscing, sed do </p>
                                <div class="tpservices__number">
                                    <div class="tpservices__number-count">
                                        <span>05</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tpservices wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1100ms">
                        <div class="tpservices__item mb-30">
                            <div class="tpservices__thumb z-index-2">
                                <div class="tpservices__service-icon">
                                    <a href=""><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                                <img src="{{ asset('frontend/assets/img/services/service-img4.jpg')}}" alt="">

                            </div>
                            <div class="tpservices__content text-left p-relative">
                                <div class="tpservices__icon">
                                    <a href="Insurance-details.html"><i class="flaticon-airplane"></i></a>
                                </div>
                                <h3 class="tpservices__title">
                                    <a href="Insurance-details.html">Travel Insurance</a>
                                </h3>
                                <p>Lorem ipsum dolor consectet adipiscing, sed do </p>
                                <div class="tpservices__number">
                                    <div class="tpservices__number-count">
                                        <span>06</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tpservices wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1300ms">
                        <div class="tpservices__item mb-30">
                            <div class="tpservices__thumb z-index-2">
                                <div class="tpservices__service-icon">
                                    <a href=""><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                                <img src="{{ asset('frontend/assets/img/services/service-img3.jpg')}}" alt="">

                            </div>
                            <div class="tpservices__content text-left p-relative">
                                <div class="tpservices__icon">
                                    <a href="Insurance-details.html"> <i class="flaticon-fire"></i></a>
                                </div>
                                <h3 class="tpservices__title">
                                    <a href="Insurance-details.html">Fire Insurance</a>
                                </h3>
                                <p>Lorem ipsum dolor consectet adipiscing, sed do </p>
                                <div class="tpservices__number">
                                    <div class="tpservices__number-count">
                                        <span>07</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tpservices wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1500ms">
                        <div class="tpservices__item mb-30">
                            <div class="tpservices__thumb z-index-2">
                                <div class="tpservices__service-icon">
                                    <a href=""><i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                                <img src="{{ asset('frontend/assets/img/services/service-img2.jpg')}}" alt="">
                            </div>
                            <div class="tpservices__content text-left p-relative">
                                <div class="tpservices__icon">
                                    <a href="Insurance-details.html"> <i class="flaticon-diamond"></i></a>
                                </div>
                                <h3 class="tpservices__title">
                                    <a href="Insurance-details.html">Marriage Insurance</a>
                                </h3>
                                <p>Lorem ipsum dolor consectet adipiscing, sed do </p>
                                <div class="tpservices__number">
                                    <div class="tpservices__number-count">
                                        <span>08</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->--}}

    <!-- choose  area start -->
    <div class="choose-area pt-120 pb-120 p-relative fix">
        <div class="choose-left-bg-img">
            <img src="{{ asset('frontend/assets/img/choose/img.jpg')}}" alt="">
        </div>
        <div class="choose-left-shap">
            <img src="{{ asset('frontend/assets/img/choose/shap.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="tpchoose__wrapper">
                        <div class="tpchoose__img p-relative">
                            <img class="w-100" src="{{ asset('frontend/assets/img/choose/img2.jpg')}}" alt="">
                            <div class="vide-button">
                                <a href="https://www.youtube.com/watch?v=o4GuSJYSzrY" class="popup-video"> <i
                                        class="fa-sharp fa-solid fa-play"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="tpchoose ml-70">
                        <div class="tpchoose__content">
                            <div class="tp-section-subtitle mb-10">why choose us</div>
                            <h2 class="tp-section-title mb-15">You can depend on us to
                                get a good services</h2>
                            <p class="tp-section-pre">Nulla maximus lacus turpis, a tempus nisi condimentum non. Sed in erosac
                                lorem facilisis accumsan at ac neque.</p>
                            <div class="save-money mt-30">
                                <div class="choose-icon">
                                    <i class="flaticon-save-money-1"></i>
                                </div>
                                <div class="choose-text">
                                    <h4>Save Your Money</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do incididunt</p>
                                </div>
                            </div>
                            <div class="work-together__progress">
                                <div class="work-together__progress-single">
                                    <h4 class="work-together__progress-title">Cover Policy</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar counted" data-percent="85%" style="width: 85%;">
                                            <div class="count-text">85%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choose  area end -->
    <!-- Testimonials  area start -->
    <div class="testimonials-area  pt-120 pb-200" data-background="{{ asset('frontend/assets/img/testimonial/img.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 pb-35">
                    <div
                        class="tptestimonials-section-title tp-section-white text-center tp-testimonial-titile  z-index position-relative">
                        <div class="tp-section-subtitle mb-15">Our Testimonials</div>
                        <h2 class="tp-section-title mb-20">What our clients say about
                            <br> our insurez
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tptestimonial-wrapper mb-20">
                        <div class="testimonials-active swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tptestimonial">
                                        <div class="tptestimonial__avatar">
                                            <div class="">
                                                <div class="tptestimonial__thumb">
                                                    <img src="{{ asset('frontend/assets/img/testimonial/user.png')}}" alt="">
                                                </div>
                                                <div class="tptestimonial__designation">
                                                    <div class="tptestimonial__meta">
                                                        <h5 class="reviewer-name">Paul Pitterson</h5>
                                                        <span class="reviewer-position">Manager</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tptestimonial__info">
                                            <p>Lorem ipsum dolor sit ameconse ctetadi piscin eiustempor incididunt ut labore et
                                                dolore magna aliqua. Quisuspendi ultri econse ctetadi piscin sit ameconse </p>
                                            <div class="star mt-25">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tptestimonial">
                                        <div class="tptestimonial__avatar">
                                            <div class="tptestimonial__thumb">
                                                <img src="{{ asset('frontend/assets/img/testimonial/user2.png')}}" alt="">
                                            </div>
                                            <div class="tptestimonial__designation">
                                                <div class="tptestimonial__meta">
                                                    <h5 class="reviewer-name">Marriage Insurance</h5>
                                                    <span class="reviewer-position">Senior Designer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tptestimonial__info">
                                            <p>Lorem ipsum dolor sit ameconse ctetadi piscin eiustempor incididunt ut labore et
                                                dolore magna aliqua. Quisuspendi ultri econse ctetadi piscin sit ameconse </p>
                                            <div class="star mt-25">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tptestimonial">
                                        <div class="tptestimonial__avatar">
                                            <div class="tptestimonial__thumb">
                                                <img src="{{ asset('frontend/assets/img/testimonial/user.png')}}" alt="">
                                            </div>
                                            <div class="tptestimonial__designation">
                                                <div class="tptestimonial__meta">
                                                    <h5 class="reviewer-name">Paul Pitterson</h5>
                                                    <span class="reviewer-position">Manager</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tptestimonial__info">
                                            <p>Lorem ipsum dolor sit ameconse ctetadi piscin eiustempor incididunt ut labore et
                                                dolore magna aliqua. Quisuspendi ultri econse ctetadi piscin sit ameconse </p>
                                            <div class="star mt-25">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-slider-dots text-center mt-50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials  area end -->
    <!-- counter  area start -->
    <div class="tp-fact-area counter-mlr">
        <div class="container container-custom">
            <div class="fact-bg" data-background="{{ asset('frontend/assets/img/counter/bg.jpg')}}">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 col-12">
                        <div class="tpfact mb-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s"
                             data-wow-delay="100ms">
                            <div class="tpfact__icon">
                                <i class="flaticon-health-insurance"></i>
                            </div>
                            <div class="tpfact__content">
                                <h2><span class="counter">4.6</span>k</h2>
                                <span>Gave Insurance</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 col-12">
                        <div class="tpfact mb-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s"
                             data-wow-delay="300ms">
                            <div class="tpfact__icon">
                                <i class="flaticon-group"></i>
                            </div>
                            <div class="tpfact__content">
                                <h2><span class="counter">85</span>+</h2>
                                <span>Professional Team</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 col-12">
                        <div class="tpfact mb-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s"
                             data-wow-delay="500ms">
                            <div class="tpfact__icon">
                                <i class="flaticon-customer-loyalty"></i>
                            </div>
                            <div class="tpfact__content">
                                <h2><span class="counter">4.3</span>k</h2>
                                <span>Satisfied Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6 col-12">
                        <div class="tpfact mb-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s"
                             data-wow-delay="700ms">
                            <div class="tpfact__icon">
                                <i class="flaticon-rate"></i>
                            </div>
                            <div class="tpfact__content">
                                <h2><span class="counter">96</span>%</h2>
                                <span>Success Rates</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter  area end -->


    <!-- get quote  area start -->
    <div class="tp-insurance-area pt-110 pb-120 p-relative fix pb-70" >
        <div class="tp-insurance-right-img">
            <img src="{{ asset('frontend/assets/img/quote/right-bg.png')}}" alt="">
        </div>
        <div class="tp-insurance-innar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="tp-insurance-section-box mb-50">
                            <h3 class="tp-section-title">Get an insurance quote to get started</h3>
                        </div>
                        <div class="tp-inurance-tab-section ">
                            <nav>
                                <div class="nav tp-Insurance-tab " id="nav-tab" role="tablist">
                                    <button class="nav-links active" id="nav-Home-tab" data-bs-toggle="tab"
                                            data-bs-target="#Home" type="button" role="tab" aria-controls="nav-Home-tab"
                                            aria-selected="true">
                              <span class="getquote">
                                 <span class="getquote__item d-flex justify-content-between align-items-center">
                                    <span class="getquote__item-info d-flex align-items-center">
                                       <i class="fa-solid fa-house"></i>
                                       <span class="tp-feature-title m-0">Home</span>
                                    </span>
                                 </span>
                              </span>
                                    </button>
                                    <button class="nav-links" id="nav-Car-tab" data-bs-toggle="tab" data-bs-target="#Car"
                                            type="button" role="tab" aria-controls="nav-Car-tab" aria-selected="false" tabindex="-1">
                              <span class="getquote">
                                 <span class="getquote__item d-flex justify-content-between align-items-center">
                                    <span class="getquote__item-info d-flex align-items-center">
                                       <i class="fa-sharp fa-solid fa-car"></i>
                                       <span class="tp-feature-title m-0">Vehicles</span>
                                    </span>
                                 </span>
                              </span>
                                    </button>
                                    <button class="nav-links" id="nav-Health-tab" data-bs-toggle="tab" data-bs-target="#Health"
                                            type="button" role="tab" aria-controls="nav-Health-tab" aria-selected="false"
                                            tabindex="-1">
                              <span class="getquote">
                                 <span class="getquote__item d-flex justify-content-between align-items-center">
                                    <span class="getquote__item-info d-flex align-items-center">
                                       <i class="fa-solid fa-heart"></i>
                                       <span class="tp-feature-title m-0">Life</span>
                                    </span>
                                 </span>
                              </span>
                                    </button>
                                    <button class="nav-links" id="nav-Education-tab" data-bs-toggle="tab"
                                            data-bs-target="#Education" type="button" role="tab" aria-controls="nav-Education-tab"
                                            aria-selected="false" tabindex="-1">
                              <span class="getquote">
                                 <span class="getquote__item d-flex justify-content-between align-items-center">
                                    <span class="getquote__item-info d-flex align-items-center">
                                       <i class="fa-regular fa-notes-medical"></i>
                                       <span class="tp-feature-title m-0">Health</span>
                                    </span>
                                 </span>
                              </span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content mr-50" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="Home" role="tabpanel" aria-labelledby="nav-Home-tab"
                                 tabindex="0">
                                <div class="tp-contact-form-wrapper">
                                    <div class="contact-section-title-box">
                                        <h4 class="tp-contact-sm-title">Vehicles insurance quote</h4>
                                    </div>
                                    <div class="contactform">
                                        <form action="#">
                                            <div class="contactform__input">
                                                <input type="text" placeholder="Full name">
                                            </div>
                                            <div class="contactform__input">
                                                <input type="text" placeholder="Email">
                                            </div>
                                            <div class="contactform__select">
                                                <div class="tp-sp-icon">
                                                    <select style="display: none;">
                                                        <option>Property Type</option>
                                                        <option>Home Insurance</option>
                                                        <option>Car Insurance</option>
                                                        <option>Health Insurance</option>
                                                        <option>Life Insurance</option>
                                                    </select>
                                                    <div class="nice-select" tabindex="0"><span class="current">Select type of
                                             insurance</span>
                                                        <ul class="list">
                                                            <li data-value="Property Type" class="option selected">Property Type
                                                            </li>
                                                            <li data-value="Home Insurance" class="option">Home Insurance</li>
                                                            <li data-value="Car Insurance" class="option">Car Insurance</li>
                                                            <li data-value="Health Insurance" class="option">Health Insurance</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tpcta__btn">
                                                <button class="tp-btn" type="submit">GET FREE QUOTE</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Car" role="tabpanel" aria-labelledby="nav-Car-tab" tabindex="0">
                                <div class="tp-contact-form-wrapper">
                                    <div class="contact-section-title-box">
                                        <h4 class="tp-contact-sm-title">Car Insurance</h4>
                                    </div>
                                    <div class="contactform">
                                        <form action="#">
                                            <div class="contactform__input">
                                                <input type="text" placeholder="Full name">
                                            </div>
                                            <div class="contactform__input">
                                                <input type="text" placeholder="Email">
                                            </div>
                                            <div class="contactform__select">
                                                <div class="tp-sp-icon">
                                                    <select style="display: none;">
                                                        <option>Property Type</option>
                                                        <option>Home Insurance</option>
                                                        <option>Car Insurance</option>
                                                        <option>Health Insurance</option>
                                                        <option>Life Insurance</option>
                                                    </select>
                                                    <div class="nice-select" tabindex="0"><span class="current">Select type of
                                             insurance</span>
                                                        <ul class="list">
                                                            <li data-value="Property Type" class="option selected">Property Type
                                                            </li>
                                                            <li data-value="Home Insurance" class="option">Home Insurance</li>
                                                            <li data-value="Car Insurance" class="option">Car Insurance</li>
                                                            <li data-value="Health Insurance" class="option">Health Insurance</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tpcta__btn">
                                                <button class="tp-btn" type="submit">GET FREE QUOTE</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Health" role="tabpanel" aria-labelledby="nav-Health-tab"
                                 tabindex="0">
                                <div class="tp-contact-form-wrapper">
                                    <div class="contact-section-title-box">
                                        <h4 class="tp-contact-sm-title">Life Insurance</h4>
                                    </div>
                                    <div class="contactform">
                                        <form action="#">
                                            <div class="contactform__input">
                                                <input type="text" placeholder="Full name">
                                            </div>
                                            <div class="contactform__input">
                                                <input type="text" placeholder="Email">
                                            </div>
                                            <div class="contactform__select">
                                                <div class="tp-sp-icon">
                                                    <select style="display: none;">
                                                        <option>Property Type</option>
                                                        <option>Home Insurance</option>
                                                        <option>Car Insurance</option>
                                                        <option>Health Insurance</option>
                                                        <option>Life Insurance</option>
                                                    </select>
                                                    <div class="nice-select" tabindex="0"><span class="current">Select type of
                                             insurance</span>
                                                        <ul class="list">
                                                            <li data-value="Property Type" class="option selected">Property Type
                                                            </li>
                                                            <li data-value="Home Insurance" class="option">Home Insurance</li>
                                                            <li data-value="Car Insurance" class="option">Car Insurance</li>
                                                            <li data-value="Health Insurance" class="option">Health Insurance</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tpcta__btn">
                                                <button class="tp-btn" type="submit">GET FREE QUOTE</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Education" role="tabpanel" aria-labelledby="nav-Education-tab"
                                 tabindex="0">
                                <div class="tp-contact-form-wrapper">
                                    <div class="contact-section-title-box">
                                        <h4 class="tp-contact-sm-title">Health Insurance</h4>
                                    </div>
                                    <div class="contactform">
                                        <form action="#">
                                            <div class="contactform__input">
                                                <input type="text" placeholder="Full name">
                                            </div>
                                            <div class="contactform__input">
                                                <input type="text" placeholder="Email">
                                            </div>
                                            <div class="contactform__select">
                                                <div class="tp-sp-icon">
                                                    <select style="display: none;">
                                                        <option>Property Type</option>
                                                        <option>Home Insurance</option>
                                                        <option>Car Insurance</option>
                                                        <option>Health Insurance</option>
                                                        <option>Life Insurance</option>
                                                    </select>
                                                    <div class="nice-select" tabindex="0"><span class="current">Select type of
                                             insurance</span>
                                                        <ul class="list">
                                                            <li data-value="Property Type" class="option selected focus">Property
                                                                Type
                                                            </li>
                                                            <li data-value="Home Insurance" class="option">Home Insurance</li>
                                                            <li data-value="Car Insurance" class="option">Car Insurance</li>
                                                            <li data-value="Health Insurance" class="option">Health Insurance</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tpcta__btn">
                                                <button class="tp-btn" type="submit">GET FREE QUOTE</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-md-12">
                        <div class="quote-bg-mask ml-25 wow slideInRight animated" data-wow-duration="2500ms"
                             data-wow-delay="100ms">
                            <img class="quote-inner-img" src="{{ asset('frontend/assets/img/quote/1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- get quote  area end -->
    <!-- blog  area start -->
    <div class="blog-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="blog-section-title text-center  z-index position-relative pb-30">
                        <div class="tp-section-subtitle mb-15">our blog</div>
                        <h2 class="tp-section-title mb-10">Our news & articles
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-6">
                    <div class="tpblog  pb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                        <div class="tpblog__thumb fix">
                            <div class="tpblog__arrow-box">
                        <span>
                           <a href="blog-details.html"> <i class="fa-solid fa-arrow-right-long"></i></a>
                        </span>
                            </div>
                            <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/img2.jpg')}}" alt=""></a>
                            <div class="tpblog__catagori">
                                <span>HOME INSURANCE</span>
                            </div>
                        </div>
                        <div class="tpblog__content fix p-relative">
                            <div class="tpblog__meta mb-15">
                        <span class="date pr-25"><i class="fa-regular fa-calendar"></i> Nov 4,
                           2022</span>
                                <span class="user"><i class="fa-light fa-user"></i> by themepure</span>
                            </div>
                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">All you need to know about our car
                                    insurance </a>
                            </h3>
                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="btn-link-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-6">
                    <div class="tpblog pb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                        <div class="tpblog__thumb fix">
                            <div class="tpblog__arrow-box">
                        <span>
                           <a href="blog-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                        </span>
                            </div>
                            <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/blog-big.jpg')}}" alt=""></a>
                            <div class="tpblog__catagori">
                                <span>HOME INSURANCE</span>
                            </div>
                        </div>
                        <div class="tpblog__content fix p-relative">
                            <div class="tpblog__meta mb-15">
                        <span class="date pr-25"><i class="fa-regular fa-calendar"></i> Nov 4,
                           2022</span>
                                <span class="user"><i class="fa-light fa-user"></i> by themepure</span>
                            </div>
                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">How to evaluate board webpage
                                    vendors
                                </a></h3>
                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="btn-link-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-6">
                    <div class="tpblog pb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="900ms">
                        <div class="tpblog__thumb fix">
                            <div class="tpblog__arrow-box">
                        <span>
                           <a href="blog-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                        </span>
                            </div>
                            <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/img3.jpg')}}" alt=""></a>
                            <div class="tpblog__catagori">
                                <span>HOME INSURANCE</span>
                            </div>
                        </div>
                        <div class="tpblog__content fix p-relative">
                            <div class="tpblog__meta mb-15">
                        <span class="date pr-25"><i class="fa-regular fa-calendar"></i> Nov 4,
                           2022</span>
                                <span class="user"><i class="fa-light fa-user"></i> by themepure</span>
                            </div>
                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">Things to do if your car catches
                                    fire
                                </a></h3>
                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="btn-link-sm" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog  area end -->


@endsection
