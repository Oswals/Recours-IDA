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
                        <img src="{{asset('frontend/assets/img/logo/logo-black.png')}}" alt="">
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
                                <span><a href="index.html">OSLOW </a></span>
                                <span class="dvdr"> / </span>
                                <span class="sub-page-black"> Blog Details</span>
                            </div>
                            <h3 class="breadcrumb__title mb-20">Blog Details</h3>
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
                    <div class="postbox__wrapper">
                        <!-- Partie article start-->
                        <article class="postbox__item format-image mb-50 transition-3">

                            <div class="postbox__thumb m-img p-relative">
                                <img src="{{asset('frontend/assets/img/blog/blog-details-bg.jpg')}}" alt="">
                                <span> 04 Feb</span>
                            </div>
                            <div class="postbox__content">
                                <div class="postbox__meta">
                                    <span><a href="blog-details.html"><i class="far fa-user"></i>By Themepure</a></span>
                                    <span><a href="blog-details.html"><i class="fal fa-comments"></i> 02 Comments</a></span>
                                </div>
                                <h3 class="postbox__title">
                                    Start an insurance policy for your future
                                </h3>
                                <div class="postbox__text">
                                    <p>Curabitur luctus euismod metus, eu pellentesque mauris tempus sit amet. Proin ante odio,
                                        posuere id lacus auctor, elementum tempor tellus. Integer mattis justo eu enim tempus
                                        lacinia. Fusce vitae enim diam. Ut commodo viverra magna non egestas. Integer sodales
                                        massa at odio tristique volutpat. Proin posuere odio maximus, eleifend felis sed, ultrices
                                        turpis. Proin ultricies sodales nisl vel euismod. Praesent vestibulum sem lorem, eget
                                        fermentum justo iaculis et. Integer tellus dolor, venenatis vitae tortor et, accumsan
                                        laoreet sem. Sed laoreet rutrum ex, et efficitur enim pharetra non. Mauris rhoncus, odio
                                        eu vulputate interdum, ipsum erat sagittis purus, vitae lobortis eros purus non augue.
                                        Nullam molestie augue diam, scelerisque porta dolor mollis a. Cras condimentum elementum
                                        eros at finibus. pharetra condimentum sagittis. Donec consequat velit et nisi scelerisque,
                                        quis iaculis felis tincidunt. In faucibus sapien ut elit hendrerit, et tristique mauris
                                        lacinia. Phasellus tincidunt scelerisque lectus sed scelerisque. Donec at enim facilisis,
                                        tempus nisi quis, pharetra enim</p>
                                    <p>Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien vel nunc
                                        molestie pulvinar at vitae quam. Aliquam lobortis nisi vitae congue consectetur. Aliquam
                                        et quam non metus ultrices faucibus sit amet non nisi. Duis at urna vel turpis aliquet
                                        venenatis et eget ipsum. Praesent felis nibh, dictum eu tincidunt sed, elementum at dolor.
                                        Duis ultricies urna a tortor faucibus venenatis. Phasellus consequat eu lacus laoreet
                                        posuere. Sed ipsum quam, placerat porta aug</p>
                                </div>
                                <div class="postbox__tagcloud mt-50">
                                    <div class="postbox__tag tagcloud">
                                        <h5>Our Tags</h5>
                                        <a href="#">Insurance</a>
                                        <a href="#">Policy</a>
                                    </div>
                                    <div class="postbox__social">
                                        <div class="icon">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="postbox__blog-banner mt-60 mb-60">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="postbox__banner-img p-relative">
                                                <a href="blog-details.html"> <img src="{{asset('frontend/assets/img/blog/blog-banner.png')}}" alt="">
                                                    <h3 class="blog-banner-title">A place where start a
                                                        new lifestyle</h3></a>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="postbox__banner-img-yellow p-relative">
                                                <a href="blog-details.html">   <img src="{{asset('frontend/assets/img/blog/blog-banner.png')}}" alt="">
                                                    <h3 class="blog-banner-title-black">Get tips to get a quick
                                                        life insurance</h3></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="postbox__wrapper pr-20">
                                    <h3 class="postbox__comment-title">2 Comments on our insurez</h3>

                                    <!-- Commmentaire Start -->
                                    <div class="postbox__comment mb-65">
                                        <ul>
                                            <li>
                                                <div class="postbox__comment-box d-flex p-relative">
                                                    <div class="postbox__comment-avater mr-40">
                                                        <img src="{{asset('frontend/assets/img/testimonial/user9.png')}}" alt="">
                                                    </div>
                                                    <div class="postbox__comment-text">
                                                        <div class="postbox__comment-name">
                                                            <h5>Yeamin Khan</h5>
                                                            <span class="post-meta">February 7, 2023 at 1:30 am</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei
                                                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                                            ultrices gravida. Risus commodo viverr facilisis. </p>
                                                        <div class="postbox__comment-reply">
                                                            <a href="blog-details.html">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="postbox__comment-box d-flex p-relative">
                                                    <div class="postbox__comment-avater mr-40">
                                                        <img src="{{asset('frontend/assets/img/testimonial/user10.png')}}" alt="">
                                                    </div>
                                                    <div class="postbox__comment-text">
                                                        <div class="postbox__comment-name">
                                                            <h5>Nusrat Jahan Marufa</h5>
                                                            <span class="post-meta">February 7, 2023 at 1:30 am</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei
                                                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                                            ultrices gravida. Risus commodo viverr facilisis. </p>
                                                        <div class="postbox__comment-reply">
                                                            <a href="blog-details.html">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--  Commentaire End-->

                                    <!-- Postez un commentaire start -->
                                    <div class="postbox__comment-form">
                                        <h3 class="postbox__comment-form-title">Laissez un commentaire</h3>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                    <div class="postbox__comment-input">
                                                        <input type="text" placeholder="Votre Nom">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                    <div class="postbox__comment-input">
                                                        <input type="email" placeholder="Email address">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                    <div class="postbox__comment-input">
                                                        <textarea placeholder="Ecrivez votre commentaire"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                    <div class="postbox__comment-btn">
                                                        <button type="submit" class="tp-btn">SUBMIT COMMENT</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Postez un commentaire End -->

                                </div>
                            </div>
                        </article>
                        <!-- Partie article end -->
                    </div>
                </div>


                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="sidebar__wrapper">
                        <div class="sidebar__widget sidebar__widget-1 mb-40">
                            <div class="sidebar__widget-content">

                                <!-- Search Bar start-->
                                <div class="sidebar__search">
                                    <form action="#">
                                        <div class="sidebar__search-input-2">
                                            <input type="text" placeholder="Search">
                                            <button type="submit"><i class="far fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <!-- search Bar end -->

                            </div>
                        </div>

                        <div class="sidebar__widget sidebar__widget-2 mb-40">
                            <h3 class="sidebar__widget-title">Post Récents</h3>
                            <div class="sidebar__widget-content">

                                <!-- Recommendations vers d'autre post start -->
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
                                <!-- Recommendations vers d'autres post end -->

                            </div>
                        </div>

                        <!-- Categories start -->
                        <div class="sidebar__widget sidebar__widget-3 mb-40">
                            <h3 class="sidebar__widget-title">Catagories</h3>
                            <div class="sidebar__widget-content">
                                <ul>
                                    <li>
                                        <a href="blog-details.html">Life imsurance <i class="flaticon-right-arrows"></i></a>
                                    </li>
                                    <li><a href="blog-details.html">Policies <i class="flaticon-right-arrows"></i></a></li>
                                    <li><a href="blog-details.html">Marriage <i class="flaticon-right-arrows"></i></a></li>
                                    <li><a href="blog-details.html"> Car insurance <i class="flaticon-right-arrows"></i></a></li>
                                    <li><a href="blog-details.html"> Home insurance <i class="flaticon-right-arrows"></i></a></li>
                                    <li><a href="blog-details.html"> Protection <i class="flaticon-right-arrows"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Categories end -->

                        <!-- Tags start -->
                        <div class="sidebar__widget sidebar__widget-4 mb-40">
                            <h3 class="sidebar__widget-title"> Tags </h3>
                            <div class="sidebar__widget-content">
                                <div class="tagcloud">
                                    <a href="#">IDA</a>
                                    <a href="#">Politique</a>
                                    <a href="#">Life insurance</a>
                                    <a href="#">Protect</a>
                                    <a href="#">Financial</a>
                                    <a href="#">Money</a>
                                    <a href="#">Life</a>
                                </div>
                            </div>
                        </div>
                        <!--  Tags end -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- postbox area end -->

@endsection
