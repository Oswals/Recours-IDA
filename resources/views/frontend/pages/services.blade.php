@extends('frontend.main_master')
@section('content')


    <!-- tp-offcanvus-area-start -->
    <div class="tpoffcanvas-area" xmlns:margin-bottom="http://www.w3.org/1999/xhtml">
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
                                <span><a href="index.html">OSLOW </a></span>
                                <span class="dvdr"> / </span>
                                <span class="sub-page-black">Services</span>
                            </div>
                            <h3 class="breadcrumb__title mb-20">Services</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  breadcrumb-area  end -->

    <!--  Insurance Details Start-->
    <div class="sv-details-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="sv-details-category mb-30">
                        <div class="sv-details-category-list">
                            <ul>
                                <li>
                                    <a href="Insurance-details.html"><span>Estimation des dommages</span><i class="flaticon-right-arrows"></i></a>
                                </li>
                                <li>
                                    <a href="Insurance-details.html"><span>Evaluation des cas </span><i class="flaticon-right-arrows"></i></a>
                                </li>
                                <li class="active">
                                    <a href="Insurance-details.html"><span>Accompagnement personnalisé</span><i class="flaticon-right-arrows"></i></a>
                                </li>
                                <li>
                                    <a href="Insurance-details.html"><span>Négociation avec l'assureur</span><i class="flaticon-right-arrows"></i></a>
                                </li>
                                <li>
                                    <a href="Insurance-details.html"><span>Gestion des documents</span><i class="flaticon-right-arrows"></i></a>
                                </li>
                                <li>
                                    <a href="Insurance-details.html"><span>Suivi du dossier</span><i class="flaticon-right-arrows"></i></a>
                                </li>
                                <li>
                                    <a href="Insurance-details.html"><span>Conseils post-indemnisation</span><i class="flaticon-right-arrows"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="insurance-details__need-help fix p-relative">
                        <div class="insurance-details__need-help-bg" data-background="{{asset('assets/img/blog/blog-sidebar.jpg')}}">
                            <div class="shap-img">
                                <img src="{{asset('frontend/assets/img/team/insulent-trans-img.png')}}" alt="">
                            </div>
                            <div class="insurance-details__content">
                                <div class="insurance-details__need-help-icon">
                                    <span><i class="flaticon-phone-call-1"></i></span>
                                </div>
                                <div class="insurance-details__need-help-contact">
                                    <p>Contactez-nous</p>
                                    <h3><a href="tel:+(229)61878578">+(229) 61 87 85 78</a></h3>
                                </div>
                                <div class="insurance-details__need-help-logo">
                                    <img src="{{asset('frontend/assets/img/logo/sideber-logo.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-8">
                    <div class="sv-details-wrapper">
                        <div class="sv-details-thumb mb-45 p-relative">
                            <img class="w-100" src="{{asset('frontend/assets/img/sideber/sidebar-img1.jpg')}}" alt="">
                            <div class="info">
                                <div class="img">
                                    <img src="{{asset('frontend/assets/img/sideber/sidebar-icon.png')}}" alt="">
                                </div>
                                <div class="text">
                                    <h3 class="sv-details-titile">Notre plateforme est l'une des plus performantes dans ce domaine <br>
                                       </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sv-insurance" >
                        <div class="sv-details-title-box" >
                            <h4 class="sv-details-title" style="margin-bottom:7px">Accompagnement Personnalisé</h4>
                            <p style="margin-bottom:7px">"Notre équipe expérimentée vous accompagne individuellement à chaque étape de votre recours IDA. Nous répondons à vos questions, vous guidons dans le processus et défendons vos intérêts pour garantir que vous obtenez la meilleure indemnisation possible, en toute tranquillité d'esprit."</p>
                        </div>

                  <!---      <div class="work-together__progress">
                            <div class="work-together__progress-single">
                                <h4 class="work-together__progress-title">Afrodable Coast</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="85%" style="width: 85%;">
                                        <div class="count-text">85%</div>
                                    </div>
                                </div>
                            </div>
                        </div>   ----->

                        <div class="help-lists pt-45">
                            <h4 style="margin-bottom:7px;">Devise de notre plateforme</h4>
                            <ul>
                                <li><i class="fa-solid fa-badge-check"></i><span><strong>Justice pour tous </strong>: Nous nous battons pour votre indemnisation juste et équitable.
                            </span></li>
                                <li><i class="fa-solid fa-badge-check"></i><span> <strong>Votre sécurité, notre priorité</strong> : Aide à la récupération rapide et efficace de votre indemnisation.
                              </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Insurance Details end -->

    <!-- feature area start -->

    <div class="tpfeature-area pt-60 pb-90">
        <div class="container"  style="margin-top:38px">
            <div class="tp-section-box text-center mb-30">
                <div class="tp-section-subtitle mb-10">Que proposons Nous ?? </div>
                <h2 class="tp-section-title mb-45">Nous nous occupons de toutes  <br>
                    les étapes du recours</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                    <div class="tpfeature mb-30 wow fadeInUp" data-wow-duration="1.5s"
                         data-wow-delay="300ms">
                        <div class="tpfeature__icon">
                            <i class="fa-thin fa-ballot-check"></i>
                        </div>
                        <div class="tpfeature__content">
                            <h3 class="tpfeature__title">Réaliser une expertise</h3>
                            <p>Contactez nos experts pour une réévaluation de vos dommages et de votre indemnisation  </p>
                            <div class="tpfeature__btn">
                                <a href="#" class="tp-btn-text">LISEZ PLUS <i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                    <div class="tpfeature mb-30 wow fadeInUp" data-wow-duration="1.5s"
                         data-wow-delay="500ms">
                        <div class="tpfeature__icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <div class="tpfeature__content">
                            <h3 class="tpfeature__title">Consultez nos Juristes</h3>
                            <p>Rencontrez des juristes compétents qui vous aidrons a réclamer ceux qui vous revient de droit</p>
                            <div class="tpfeature__btn">
                                <a href="#" class="tp-btn-text">LISEZ PLUS <i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6 col-12">
                    <div class="tpfeature mb-30 wow fadeInUp" data-wow-duration="1.5s"
                         data-wow-delay="700ms">
                        <div class="tpfeature__icon">
                            <i class="flaticon-save-money-1"></i>
                        </div>
                        <div class="tpfeature__content">
                            <h3 class="tpfeature__title">Entamez votre Recours</h3>
                            <p>Déposer votre dossier et laissez nous nous occuper de tous de l'expertise aux poursuites juridiques </p>
                            <div class="tpfeature__btn">
                                <a href="#" class="tp-btn-text">LISEZ PLUS<i class="fa-light fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature area end -->

    <!-- cta  area start -->
    <div class="tp-cta-4__area p-relative cta-mlr" data-background="{{asset('frontend/assets/img/cta/cta-bg-4.png')}}">
        <div class="container ">
            <div class="tp-cta-4__bg ">
                <div class="row align-items-center">
                    <div class="col-xl-8">
                        <h3 class="cta-titile">Trouvez solution a vos problèmes d'Indemnisation Automobile avec Oslow</h3>
                    </div>
                    <div class="col-xl-4">
                        <div class="tp-cta-4__right text-end">
                            <div class="tp-cta-4__btn pt-10">
                                <a class="tp-btn-black" href="#">COMMENCEZ.....</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta  area end -->

@endsection

