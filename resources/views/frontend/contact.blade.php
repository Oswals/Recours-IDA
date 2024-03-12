@extends('frontend.main_master')
@section('content')

    <!--  breadcrumb-area  start -->
    <div class="wrapper-box p-relative ">
        <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 "
             data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1 text-center">
                            <div class="breadcrumb__list mb-10">
                                <span><a href="index.html">OSLOW</a></span>
                                <span class="dvdr"> / </span>
                                <span class="sub-page-black">Contactez-nous</span>
                            </div>
                            <h3 class="breadcrumb__title mb-20">Contactez-nous</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  breadcrumb-area  end -->

    <!-- contact area start -->
    <div class="tp-faq-area pb-120 pt-50 grey-bg-1 p-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                    <div class="contact">
                        <div class="contact__form mb-30">
                            <form id="contact-form" action="assets/mail.php">
                                <div class="contact__form-wrap">
                                    <div class="tp-form-box">
                                        <span class="tp-form-subtitle right">Contactez-nous</span>
                                        <h2 class="tp-form-title mb-30 mt-10">
                                            Ecrivez un mail
                                        </h2>
                                    </div>
                                    <div class="contact__input">
                                        <input class="w-100" type="text" placeholder="Entrez votre nom" name="name" required="">
                                    </div>
                                    <div class="contact__input">
                                        <input class="w-100" type="email" placeholder="Email" name="email" required="">
                                    </div>
                                    <div class="contact__input">
                                        <input class="w-100" type="text" placeholder="Téléphone" name="number" required="">
                                    </div>
                                    <div class="contact__input">
                                        <textarea class="w-100" placeholder="Message" name="message" required=""></textarea>
                                    </div>

                                    <div class="contact__button">
                                        <button class="tp-btn-3" type="submit">Envoyez</button>
                                    </div>
                                </div>
                            </form>
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7 col-md-6 col-12">
                    <div class="contact ml-40">
                        <div class="map-area">
                            <div class="tpmap-wrapper">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13026973.62891735!2d-106.25469552110826!3d37.14286659523624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1681626899539!5m2!1sen!2sbd"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <div class="contact__wrap mt-25">
                            <div class="contact__info-item d-flex align-items-start mb-35">
                                <div class="contact__info-icon">
                                    <i class="flaticon-phone-call-1"></i>
                                </div>
                                <div class="contact__info-text">
                                    <h4>+(229) 61 87 85 78</h4>
                                </div>
                            </div>
                            <div class="contact__info-item d-flex align-items-start mb-35">
                                <div class="contact__info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="contact__info-text">
                                    <h4>sessinoumayer@gmail.com</h4>
                                </div>
                            </div>
                            <div class="contact__info-item d-flex align-items-start">
                                <div class="contact__info-icon">
                                    <i class="flaticon-location-1"></i>
                                </div>
                                <div class="contact__info-text">
                                    <h4>06BP 2687. Akpakpa, Cotonou. Rep. du Bénin</h4>
                                </div>
                            </div>
                            <div class="contact__social pt-30">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->



@endsection
