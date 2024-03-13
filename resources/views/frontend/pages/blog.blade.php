@extends('frontend.main_master')
@section('content')

    <!-- tp-offcanvus-area-start -->
    <div class="tpoffcanvas-area">
        <div class="offcanvas__wrapper">
            <div class="tpoffcanvas">
                <div class="tpoffcanvas__close-btn">
                    <button class="close-btn"><i class="fal fa-times"></i></button>
                </div>
                <div class="tpoffcanvas__logo">
                    <a href="index.html">
                        <img src="assets/img/logo/logo-black.png" alt="">
                    </a>
                </div>
                <div class="mobile-menu"></div>
                <div class="tpoffcanvas__contact">
                    <h4 class="tpoffcanvas__title">Contacts</h4>
                    <div class="tpoffcanvas__contact-content d-flex">
                        <div class="tpoffcanvas__contact-content-icon">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                        </div>
                        <div class="tpoffcanvas__contact-content-content">
                            <a
                                href="https://www.google.com/maps/search/86+Road+Broklyn+Street,+600+New+York,+USA/@40.6897806,-74.0278086,12z/data=!3m1!4b1">86
                                Road Broklyn Street, 600 </a>
                        </div>
                    </div>
                    <div class="tpoffcanvas__contact-content d-flex">
                        <div class="tpoffcanvas__contact-content-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="tpoffcanvas__contact-content-content">
                            <a href="mailto:needhelp@company.com"> Needhelp@company.com </a>
                        </div>
                    </div>
                    <div class="tpoffcanvas__contact-content d-flex">
                        <div class="tpoffcanvas__contact-content-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="tpoffcanvas__contact-content-content">
                            <a href="tel:01310-069824"> +92 666 888 0000</a>
                        </div>
                    </div>
                </div>
                <div class="tpoffcanvas__social">
                    <a class="icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="icon twitter" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="icon youtube" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="icon linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->

    <!--  breadcrumb-area  start -->
    <div class="wrapper-box p-relative ">
        <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 "
             data-background="{{asset('frontend/assets/img/breadcrumb/breadcrumb-bg-1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1 text-center">
                            <div class="breadcrumb__list mb-10">
                                <span><a href="index.html">INSUREZ </a></span>
                                <span class="dvdr"> / </span>
                                <span class="sub-page-black">Our Blog</span>
                            </div>
                            <h3 class="breadcrumb__title mb-20">Our Blog</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  breadcrumb-area  end -->

    <!-- team area start -->
    <div class="tp-blog pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-6">
                    <div class="tpblog pb-30">
                        <div class="tpblog__thumb-2 fix">
                            <a href="blog-details.html"><img src="{{asset('frontend/assets/img/blog/img2.jpg')}}" alt=""></a>
                            <div class="tpblog__catagori-2">
                                <span>HOME INSURANCE</span>
                            </div>
                        </div>
                        <div class="tpblog__content-2">
                            <div class="tpblog__meta-2 mb-15">
                        <span class="date pr-25"><i class="fa-regular fa-calendar"></i> Nov 4,
                           2022</span>
                                <span class="user"><i class="fa-light fa-user"></i> by themepure</span>
                            </div>
                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">Money markets rates
                                    finding the best accounts </a></h3>
                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="tp-btn-4 " href="blog-details.html">Read More</a>
                            </div>
                            <div class="tpblog__arrow-box-2">
                        <span>
                           <a href="blog-details.html"> <i class="fa-solid fa-arrow-right-long"></i></a>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-6">
                    <div class="tpblog pb-30">
                        <div class="tpblog__thumb-2 fix">
                            <a href="blog-details.html"><img src="{{asset('frontend/assets/img/blog/blog-big.jpg')}}" alt=""></a>
                            <div class="tpblog__catagori-2">
                                <span>Life INSURANCE</span>
                            </div>
                        </div>
                        <div class="tpblog__content-2">
                            <div class="tpblog__meta-2 mb-15">
                        <span class="date pr-25"><i class="fa-regular fa-calendar"></i> Nov 4,
                           2022</span>
                                <span class="user"><i class="fa-light fa-user"></i> by themepure</span>
                            </div>
                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">Insurance covers risk of
                                    fire absence </a></h3>
                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="tp-btn-4 " href="blog-details.html">Read More</a>
                            </div>
                            <div class="tpblog__arrow-box-2">
                        <span>
                           <a href="blog-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-6">
                    <div class="tpblog pb-30">
                        <div class="tpblog__thumb-2 fix">
                            <a href="blog-details.html"><img src="{{asset('frontend/assets/img/blog/img3.jpg')}}" alt=""></a>
                            <div class="tpblog__catagori-2">
                                <span>Business INSURANCE</span>
                            </div>
                        </div>
                        <div class="tpblog__content-2">
                            <div class="tpblog__meta-2 mb-15">
                        <span class="date pr-25"><i class="fa-regular fa-calendar"></i> Nov 4,
                           2022</span>
                                <span class="user"><i class="fa-light fa-user"></i> by themepure</span>
                            </div>
                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">It’s a long established fact
                                    that a reader</a></h3>
                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="tp-btn-4 " href="blog-details.html">Read More</a>
                            </div>
                            <div class="tpblog__arrow-box-2">
                        <span>
                           <a href="blog-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-6">
                    <div class="tpblog pb-30">
                        <div class="tpblog__thumb-2 fix">
                            <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog3.4.jpg')}}" alt=""></a>
                            <div class="tpblog__catagori-2">
                                <span>CAR INSURANCE</span>
                            </div>
                        </div>
                        <div class="tpblog__content-2">
                            <div class="tpblog__meta-2 mb-15">
                        <span class="date pr-25"><i class="fa-regular fa-calendar"></i> Nov 4,
                           2022</span>
                                <span class="user"><i class="fa-light fa-user"></i> by themepure</span>
                            </div>

                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">Former insures ony the
                                    merine perils </a></h3>

                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="tp-btn-4 " href="blog-details.html">Read More</a>
                            </div>
                            <div class="tpblog__arrow-box-2">
                        <span>
                           <a href="blog-details.html"> <i class="fa-solid fa-arrow-right-long"></i></a>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-6">
                    <div class="tpblog pb-30">
                        <div class="tpblog__thumb-2 fix">
                            <a href="blog-details.html"><img src="{{asset('frontend/assets/img/blog/blog3.5.jpg')}}" alt=""></a>
                            <div class="tpblog__catagori-2">
                                <span>HOME INSURANCE</span>
                            </div>
                        </div>
                        <div class="tpblog__content-2">
                            <div class="tpblog__meta-2 mb-15">
                        <span class="date pr-25"><i class="fa-regular fa-calendar"></i> Nov 4,
                           2022</span>
                                <span class="user"><i class="fa-light fa-user"></i> by themepure</span>
                            </div>
                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">How to make contrary to
                                    popular insurance </a></h3>
                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="tp-btn-4 " href="blog-details.html">Read More</a>
                            </div>
                            <div class="tpblog__arrow-box-2">
                        <span>
                           <a href="blog-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-6">
                    <div class="tpblog pb-30">
                        <div class="tpblog__thumb-2 fix">
                            <a href="blog-details.html"><img src="{{asset('frontend/assets/img/blog/blog3.6.jpg')}}" alt=""></a>
                            <div class="tpblog__catagori-2">
                                <span>LIFE INSURANCE</span>
                            </div>
                        </div>
                        <div class="tpblog__content-2">
                            <div class="tpblog__meta-2 mb-15">
                        <span class="date pr-25"><i class="fa-regular fa-calendar"></i> Nov 4,
                           2022</span>
                                <span class="user"><i class="fa-light fa-user"></i> by themepure</span>
                            </div>
                            <h3 class="tp-blog-title mb-25"><a href="blog-details.html">Guide to audio visual java
                                    jsa script </a></h3>
                            <div class="tp-feed-link d-flex align-items-center">
                                <a class="tp-btn-4 " href="blog-details.html">Read More</a>
                            </div>
                            <div class="tpblog__arrow-box-2">
                        <span>
                           <a href="blog-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- team area end -->


@endsection
