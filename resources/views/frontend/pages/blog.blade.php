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
                                <span><a href="index.html">Oslow </a></span>
                                <span class="dvdr"> / </span>
                                <span class="sub-page-black">Blog</span>
                            </div>
                            <h3 class="breadcrumb__title mb-20">Blog</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  breadcrumb-area  end -->

    <!-- postbox area start -->
    <section class="postbox__area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="postbox__wrapper pr-20">
                        <article class="postbox__item format-image mb-30 transition-3">
                            <div class="postbox__thumb m-img p-relative">
                                <a href="blog-details.html">
                                    <img src="{{'frontend/assets/img/blog/blog-sidebar.jpg'}}" alt="">
                                    <span> 04 Feb</span>
                                </a>
                            </div>
                            <div class="postbox__content">
                                <div class="postbox__meta">

                                    <span><a href="blog-details.html"><i class="far fa-user"></i> By Themepure</a></span>
                                    <span><a href="blog-details.html"><i class="fal fa-comments"></i> 02 Comments</a></span>
                                </div>
                                <h3 class="postbox__title">
                                    We providing the best insurance service
                                </h3>
                                <div class="postbox__text">
                                    <p>Curabitur luctus euismod metus, eu pellentesque mauris tempus sit amet. Proin ante odio,
                                        posuere id lacus auctor, elementum tempor tellus. Integer mattis justo eu enim tempus
                                        lacinia. Fusce vitae enim diam. Ut commodo viverra magna non egestas</p>
                                </div>
                            </div>
                            <div class="blog-btn mt-30">
                                <a class="tp-btn" href="blog-details.html">READ MORE</a>
                            </div>
                        </article>
                        <article class="postbox__item format-image mb-30 transition-3">
                            <div class="postbox__thumb m-img p-relative">
                                <a href="blog-details.html">
                                    <img src="{{asset(('frontend/assets/img/blog/blog-sidebar2.jpg'))}}" alt="">
                                    <span> 04 Feb</span>
                                </a>
                            </div>
                            <div class="postbox__content">
                                <div class="postbox__meta">

                                    <span><a href="blog-details.html"><i class="far fa-user"></i> By Themepure</a></span>
                                    <span><a href="blog-details.html"><i class="fal fa-comments"></i> 02 Comments</a></span>
                                </div>
                                <h3 class="postbox__title">
                                    Key Features For your Insurance Business
                                </h3>
                                <div class="postbox__text">
                                    <p>Curabitur luctus euismod metus, eu pellentesque mauris tempus sit amet. Proin ante odio,
                                        posuere id lacus auctor, elementum tempor tellus. Integer mattis justo eu enim tempus
                                        lacinia. Fusce vitae enim diam. Ut commodo viverra magna non egestas</p>
                                </div>
                            </div>
                            <div class="blog-btn mt-30">
                                <a class="tp-btn" href="blog-details.html">READ MORE</a>
                            </div>
                        </article>
                        <article class="postbox__item format-image mb-50 transition-3">
                            <div class="postbox__thumb m-img p-relative">
                                <a href="blog-details.html">
                                    <img src="{{asset('frontend/assets/img/blog/blog-sidebar3.jpg')}}" alt="">
                                    <span> 04 Feb</span>
                                </a>
                            </div>
                            <div class="postbox__content">
                                <div class="postbox__meta">

                                    <span><a href="blog-details.html"><i class="far fa-user"></i> By Themepure</a></span>
                                    <span><a href="blog-details.html"><i class="fal fa-comments"></i> 02 Comments</a></span>
                                </div>
                                <h3 class="postbox__title">
                                    Trusted and Professional Insurance Company
                                </h3>
                                <div class="postbox__text">
                                    <p>Curabitur luctus euismod metus, eu pellentesque mauris tempus sit amet. Proin ante odio,
                                        posuere id lacus auctor, elementum tempor tellus. Integer mattis justo eu enim tempus
                                        lacinia. Fusce vitae enim diam. Ut commodo viverra magna non egestas</p>
                                </div>
                            </div>
                            <div class="blog-btn mt-30">
                                <a class="tp-btn" href="blog-details.html">READ MORE</a>
                            </div>
                        </article>
                        <div class="basic-pagination">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="blog-sidebar.html">1</a>
                                    </li>
                                    <li>
                                        <span class="current">2</span>
                                    </li>
                                    <li>
                                        <a href="blog-sidebar.html">3</a>
                                    </li>
                                    <li>
                                        <a href="blog-sidebar.html">
                                            <i class="far fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="sidebar__wrapper">
                        <div class="sidebar__widget sidebar__widget-1 mb-40">
                            <div class="sidebar__widget-content">
                                <div class="sidebar__search">
                                    <form action="#">
                                        <div class="sidebar__search-input-2">
                                            <input type="text" placeholder="Search">
                                            <button type="submit"><i class="far fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget sidebar__widget-2 mb-40">
                            <h3 class="sidebar__widget-title">Post récebts</h3>
                            <div class="sidebar__widget-content">
                                <div class="sidebar__post p-relative">
                                    <div class="rc__post d-flex align-items-center">
                                        <div class="rc__post-thumb mr-20">
                                            <a href="blog-details.html"><img src="{{asset('frontend/assets/img/sideber/resent-post.png')}}" alt=""></a>
                                            <span> <i class="flaticon-right-arrows"></i></span>
                                        </div>
                                        <div class="rc__post-content">
                                            <div class="rc__meta">
                                                <span><i class="fal fa-comments"></i> 02 Comments</span>
                                            </div>
                                            <h3 class="rc__post-title">
                                                <a href="blog-details.html">Designing human body
                                                    interfaces</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="rc__post d-flex align-items-center">
                                        <div class="rc__post-thumb mr-20">
                                            <a href="blog-details.html"><img src="{{asset('frontend/assets/img/sideber/resent-post3.png')}}" alt=""></a>
                                            <span> <i class="flaticon-right-arrows"></i></span>
                                        </div>
                                        <div class="rc__post-content">
                                            <div class="rc__meta">
                                                <span><i class="fal fa-comments"></i> 02 Comments</span>
                                            </div>
                                            <h3 class="rc__post-title">
                                                <a href="blog-details.html">Designing human body
                                                    interfaces</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="rc__post d-flex align-items-center">
                                        <div class="rc__post-thumb mr-20">
                                            <a href="blog-details.html"><img src="{{asset('frontend/assets/img/sideber/resent-post2.png')}}" alt=""></a>
                                            <span> <i class="flaticon-right-arrows"></i></span>
                                        </div>
                                        <div class="rc__post-content">
                                            <div class="rc__meta">
                                                <span><i class="fal fa-comments"></i> 02 Comments</span>
                                            </div>
                                            <h3 class="rc__post-title">
                                                <a href="blog-details.html">Designing human body
                                                    interfaces</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="sidebar__widget sidebar__widget-3 mb-40">
                            <h3 class="sidebar__widget-title"> Catagories </h3>
                            <div class="sidebar__widget-content">
                                <ul>
                                    <li>
                                        <a href="blog-details.html">Conseils <i class="flaticon-right-arrows"></i></a>
                                    </li>
                                    <li><a href="blog-details.html">Politique d'assurance <i class="flaticon-right-arrows"></i></a></li>
                                    <li><a href="blog-details.html">Taux d'Accidents <i class="flaticon-right-arrows"></i></a></li>
                                    <li><a href="blog-details.html"> Arnaque a l'assurance <i class="flaticon-right-arrows"></i></a></li>
                                    <li><a href="blog-details.html"> Protection <i class="flaticon-right-arrows"></i></a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="sidebar__widget sidebar__widget-4 mb-40">
                            <h3 class="sidebar__widget-title">Tags</h3>
                            <div class="sidebar__widget-content">
                                <div class="tagcloud">
                                    <a href="#">Assurance</a>
                                    <a href="#">Conseils</a>
                                    <a href="#">Protection</a>
                                    <a href="#">A</a>
                                    <a href="#">Life</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- postbox area end -->


@endsection
