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
                                <span><a href="index.html">Oslow </a></span>
                                <span class="dvdr"> / </span>
                                <span class="sub-page-black"> A Propos de nous</span>
                            </div>
                            <h3 class="breadcrumb__title mb-20">A propos de Oslow</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  breadcrumb-area  end -->

    <!----------------- PARTIE 1 Start :  Présentation de l'entreprise  ----------------->
    <!-- about area start -->
    <div class="tp-about-area-2 pt-120 pb-120 fix p-relative">
        <div class="tp-about-man">
            <img src="{{asset('frontend/assets/img/about/about-men-img-left.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="tp-about-2__wapper text-end mb-30 p-relative">
                        <div class="counter__item">
                            <div class="counter__content experience">
                                <h2 class="counter__title "><span class="counter">01</span></h2>
                                <p>Years of <br> Experience</p>
                            </div>
                        </div>
                        <div class="tp-about-2__ab-sec-img mr-35">
                            <img src="{{asset('frontend/assets/img/about/img-sm2.png')}}" alt="">
                        </div>
                        <div class="tp-about-2__ab-third-img">
                            <img src="{{asset('frontend/assets/img/about/Ig-img2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="tp-about-wrap pl-90">
                        <div class="tp-section-box text-start mb-30">
                            <div class="tp-section-subtitle subtitle-before mb-10">EN SAVOIR PLUS SUR OSLOW </div>
                            <h2 class="tp-section-title mb-10">Un collectif d'experts engagés pour vous</h2>
                            <p class="tp-section-pre"> Notre plateforme rassemble un collectif d'experts de renom : avocats spécialisés en droit des assurances, experts automobiles certifiés et développeurs chevronnés. Ensemble, ils unissent leurs compétences pour vous offrir un accompagnement complet et performant.
                            Les juristes assurent une défense optimale de vos intérêts. Les experts techniques évaluent avec précision les dommages subis. Et notre plateforme intuitive vous permet un suivi simple de vos dossiers d'indemnisation.
                            De l'analyse initiale à la finalisation des procédures, ce collectif pluridisciplinaire met son professionnalisme à votre service.</p>
                        </div>

                        <div class="help-list">
                            <ul>
                                <li><i class="fa-solid fa-badge-check"></i><span>Nsectetur cing elit</span></li>
                                <li><i class="fa-solid fa-badge-check"></i><span>Curabitur ementum</span></li>
                                <li><i class="fa-solid fa-badge-check"></i><span>Etiam sit amet faucib</span>
                                </li>
                                <li><i class="fa-solid fa-badge-check"></i><span>Nullam ultrices lobortis</span>
                                </li>
                            </ul>
                        </div>
                        <div class="tp-about-4__bottom-btn  mt-40">
                            <div class="tp-about-4__btn-box">
                                <a class="tp-btn" href="about.html">DECOUVREZ PLUS</a>
                            </div>
                            <div class="tp-about-4__call">
                                <div class="tp-about-4__icon team-detials__call-icon ">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="tp-about-4__content team-detials__call-content  pl-15">
                                    <span>Appelez-nous</span>
                                    <a href="tel:91638488">+229 91 63 84 88</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->
    <!----------------- PARTIE 1 End ----------------->

    <!----------------- PARTIE 2 Start : FAQ----------------->
    <!--  faq-area  start -->
    <div class="tp-faq-area mb-120 pt-50 p-relative">
        <div class="tp-faq-right-color">
            <div class="tp-faq-inner-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="contact pr-80">
                            <div class="contact__form mb-30">
                                <form id="contact-form" action="{{asset('frontend/assets/mail.php')}}">
                                    <div class="contact__form-wrap">
                                        <div class="tp-form-box">
                                            <span class="tp-form-subtitle right">Contactez-nous</span>
                                            <h2 class="tp-form-title mb-30 pt-5">
                                                Ecrivez un Email
                                            </h2>
                                        </div>
                                        <div class="contact__input">
                                            <input class="w-100" type="text" placeholder=" Entrez votre nom" name="name" required="">
                                        </div>
                                        <div class="contact__input">
                                            <input class="w-100" type="email" placeholder="Adresse Email" name="email" required="">
                                        </div>
                                        <div class="contact__input">
                                            <input class="w-100" type="text" placeholder="Telephone" name="number" required="">
                                        </div>
                                        <div class="contact__input">
                                            <textarea class="w-100" placeholder="Message" name="message" required=""></textarea>
                                        </div>

                                        <div class="contact__button">
                                            <button class="tp-btn-3" type="submit">Envoyer un message</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="ajax-response"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="tp-accordion">
                            <div class="tp-section-box  mb-50">
                                <div class="tp-section-subtitle pb-10"></div>
                                <h2 class="tp-section-title pb-10">They frequently asked
                                    questions</h2>
                            </div>
                            <div class="pe-xl-6">
                                <div id="accordion" class="accordion-style">
                                    <div class="card mb-30">
                                        <div class="card-header" id="headingOne">
                                 <span class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">01.
                                       Qu'est-ce que l'indemnisation directe automobile ? </button>
                                 </span>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                             data-bs-parent="#accordion" style="">
                                            <div class="card-body">
                                                L'indemnisation directe automobile permet aux conducteurs impliqués dans un accident de se faire indemniser directement par leur propre assurance, sans passer par l'assurance adverse.
                                                Cette procédure simplifie et accélère le traitement des dossiers.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-30">
                                        <div class="card-header" id="headingTwo">
                                 <span class="mb-0">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="true" aria-controls="collapseTwo">02. Vestibulum sit amet sem
                                       vitae
                                       ligula commodo </button>
                                 </span>
                                        </div>
                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                             data-bs-parent="#accordion" style="">
                                            <div class="card-body">
                                                Sed ut luctus ante. Duis elementum orci ut mauris iaculis vestibulum. Vestibulum sit
                                                amet
                                                sem vitae ligula commodo viverra nec eget est. Integer auctor, dui vel pharetra
                                                viverra
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                 <span class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">03.
                                       Phasellus in orci nec neque scelerisque interdum</button>
                                 </span>
                                        </div>
                                        <div id="collapseThree" class="collapse " aria-labelledby="headingThree"
                                             data-bs-parent="#accordion">
                                            <div class="card-body">
                                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                                Ipsum
                                                passages, and more recently with desktop publishing software like Aldus PageMaker
                                                including versions of Lorem Ipsum.
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
    </div>
    <!--  faq area  end -->
    <!----------------- PARTIE 2 End  ----------------->

    <!----------------- PARTIE 3 Start : Entreprise Partenaires ----------------->
    <!-- brand area start -->
    <div class="tp-brand mlr-2 pt-110 pb-90 " data-background="{{asset('frontend/assets/img/brand/brand-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                    <div class="tp-section-box text-center mb-60">
                        <h2 class="tp-section-title mb-20">Who trust us</h2>
                        <p>Our journey has only brought us higher. Information Technology completely
                            changes the way we analyze and present data</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tp-brand__item">
                        <div class="brand-active swiper-container">
                            <div class="swiper-wrapper">
                                <div class=" swiper-slide tp-brand-single pb-30">
                                    <img src="{{asset('frontend/assets/img/brand/hover1.png')}}" alt="">
                                </div>
                                <div class=" swiper-slide tp-brand-single  pb-30">
                                    <img src="{{asset('frontend/assets/img/brand/hover2.png')}}" alt="">
                                </div>
                                <div class=" swiper-slide tp-brand-single  pb-30">
                                    <img src="{{asset('frontend/assets/img/brand/hover3.png')}}" alt="">
                                </div>
                                <div class=" swiper-slide tp-brand-single  pb-30">
                                    <img src="{{asset('frontend/assets/img/brand/hover1.png')}}" alt="">
                                </div>
                                <div class=" swiper-slide tp-brand-single  pb-30">
                                    <img src="{{asset('frontend/assets/img/brand/hover4.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end -->
    <!----------------- PARTIE 3 End  ----------------->

    <!----------------- PARTIE 4 Start: Lien vers Solution   ----------------->
    <!-- cta  area start -->
    <div class="tp-cta-4 pt-120  fix p-relative pb-120" data-background="{{asset('frontend/assets/img/cta/bg2.jpg')}}">
        <div class="tp-cta-4__shap"></div>
        <div class="tp-cta-shap">
            <img src="{{asset('frontend/assets/img/cta/shap1.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-cta-4__wrap">
                        <div class="tp-cta-4__wrap text-center">
                            <h2 class="tp-cta-title mb-40">We’re delivering the best <br>
                                customer experience</h2>
                            <div class="tp-cta-btn">
                                <a class="tp-btn-3" href="about.html">GET STARTED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta  area end -->
    <!----------------- PARTIE 4 End  ----------------->

    <!----------------- PARTIE 5 Start : Présentation des acteurs ----------------->
    <!-- team area start -->
    <div class="tp-team-area team-padding mlr pt-90 pb-110">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="tp-section-box text-center mb-30">
                        <div class="tp-section-subtitle mb-15">OUR SPEACIALIST</div>
                        <h2 class="tp-section-title mb-20">Meet with our experet <br>
                            team member</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="team-active swiper-container">
                        <div class="swiper-wrapper">
                            <div class=" swiper-slide tp-team-2__item text-center pt-30 wow fadeInUp" data-wow-duration="1.5s"
                                 data-wow-delay="300ms">
                                <div class="tp-team-2__box fix">
                                    <div class="tp-team-2__thumb">
                                        <img class="w-100" src="{{asset('frontend/assets/img/team/img1.jpg')}}" alt="">
                                        <div class="tp-team-2__social">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"> <i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-team-2__content p-relative">
                                    <div class="tp-team-2__share">
                                        <a href="team-details.html"><i class="fa-solid fa-share-nodes"></i></a>
                                    </div>
                                    <h4 class="tp-team-titile"><a href="team-details.html">Alextina Pitterson</a></h4>
                                    <span>Co Founder</span>
                                </div>
                            </div>
                            <div class=" swiper-slide tp-team-2__item text-center pt-30 wow fadeInUp" data-wow-duration="1.5s"
                                 data-wow-delay="600ms">
                                <div class="tp-team-2__box fix">
                                    <div class="tp-team-2__thumb">
                                        <img class="w-100" src="{{asset('frontend/assets/img/team/img2.jpg')}}" alt="">
                                        <div class="tp-team-2__social">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"> <i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-team-2__content p-relative">
                                    <div class="tp-team-2__share">
                                        <a href="team-details.html"><i class="fa-solid fa-share-nodes"></i></a>
                                    </div>
                                    <h4 class="tp-team-titile"><a href="team-details.html">Crispin Ellies</a></h4>
                                    <span>Manager</span>
                                </div>
                            </div>
                            <div class=" swiper-slide tp-team-2__item text-center pt-30 wow fadeInUp" data-wow-duration="1.5s"
                                 data-wow-delay="900ms">
                                <div class="tp-team-2__box fix">
                                    <div class="tp-team-2__thumb">
                                        <img class="w-100" src="{{asset('frontend/assets/img/team/img3.jpg')}}" alt="">
                                        <div class="tp-team-2__social">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"> <i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-team-2__content p-relative">
                                    <div class="tp-team-2__share">
                                        <a href="team-details.html"><i class="fa-solid fa-share-nodes"></i></a>
                                    </div>
                                    <h4 class="tp-team-titile"><a href="team-details.html">Humphrey Seth</a></h4>
                                    <span>Developer</span>
                                </div>
                            </div>
                            <div class=" swiper-slide tp-team-2__item text-center pt-30 wow fadeInUp" data-wow-duration="1.5s"
                                 data-wow-delay="1200ms">
                                <div class="tp-team-2__box fix">
                                    <div class="tp-team-2__thumb">
                                        <img class="w-100" src="{{asset('frontend/assets/img/team/img4.jpg')}}" alt="">
                                        <div class="tp-team-2__social">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"> <i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-team-2__content p-relative">
                                    <div class="tp-team-2__share">
                                        <a href="team-details.html"><i class="fa-solid fa-share-nodes"></i></a>
                                    </div>
                                    <h4 class="tp-team-titile"><a href="team-details.html">Salim Rana</a></h4>
                                    <span>Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="team-slider-dots text-center mt-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team area end -->
    <!----------------- PARTIE 5 End  ----------------->

    <!----------------- PARTIE 6 Start : Statistiques ----------------->
    <!-- counter  area start -->
    <div class="tp-fact-area pt-110 pb-80" data-background="{{asset('frontend/assets/img/counter/bg3.jpg')}}">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-xl-3 col-md-3 col-sm-6 col-12">
                    <div class="tpfact mb-30 d-flex align-items-center ">
                        <div class="tpfact__icon">
                            <i class="flaticon-health-insurance"></i>
                        </div>
                        <div class="tpfact__content">
                            <h2><span class="counter">1.8</span>k</h2>
                            <span>Gave Insurance</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6 col-12">
                    <div class="tpfact mb-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s"
                         data-wow-delay="300ms">
                        <div class="tpfact__icon">
                            <i class="flaticon-group"></i>
                        </div>
                        <div class="tpfact__content">
                            <h2><span class="counter">34</span>+</h2>
                            <span>Professional Team</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6 col-12">
                    <div class="tpfact mb-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s"
                         data-wow-delay="600ms">
                        <div class="tpfact__icon">
                            <i class="flaticon-customer-loyalty"></i>
                        </div>
                        <div class="tpfact__content">
                            <h2><span class="counter">1.7</span>k</h2>
                            <span>Satisfied Clients</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6  col-12">
                    <div class="tpfact mb-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s"
                         data-wow-delay="900ms">
                        <div class="tpfact__icon">
                            <i class="flaticon-rate"></i>
                        </div>
                        <div class="tpfact__content">
                            <h2><span class="counter">38</span>%</h2>
                            <span>Success Rates</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter  area end -->
    <!----------------- PARTIE 6 End  ----------------->

    <!----------------- PARTIE 7 Start  ----------------->
    <!----------------- PARTIE 7 End  ----------------->




@endsection
