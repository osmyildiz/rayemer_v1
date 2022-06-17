@extends('frontend.layouts.master')
@section('title','Rayemer')



@section('content')

    <section class="contact-section">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="section-title-wrapper mb-5 text-center">
                            <p class="secion-seperator"><span class="fa fa-phone"></span></p>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 pr-lg-7">
                        @include('frontend.layouts.applyform')
                    </div><!-- .col -->
                    <div class="col-lg-5">
                        <h2 class="contact-title mb-5 text-center">Adres Bilgileri</h2>
                        <div class="contact-location px-xl-3 px-lg-0 px-3">
                            <p class="m-0">Kursumuz Küçükyalı merkezde, minibüs caddesi üzerinde Migros'un olduğu binada, 2.katındadır.</p>
                            <div class="contact-info-part mt-4">
                                <div class="media contact-info-wrap">
                                    <div class="media-body d-flex mb-3">
                                        <span class="ti-location-pin contact-icon"></span>
                                        <p class="contact-info ml-5">Çınar, Bağdat Cd. No: 179 Kat:2, 34841 Maltepe/İstanbul, Türkiye</p>
                                    </div>
                                </div>
                                <div class="media contact-info-email-wrap">
                                    <div class="media-body d-flex mb-3">
                                        <span class="ti-email contact-icon"></span>
                                        <p class="contact-info ml-5">rayemerkurs@gmail.com</p>
                                    </div>
                                </div>
                                <div class="media contact-info-phone-wrap">
                                    <div class="media-body d-flex">
                                        <span class="ti-mobile contact-icon"></span>
                                        <p class="contact-info mb-0 ml-5">0 216 549 30 49, 0 552 549 30 49</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>

    <section class="map-section section-bg-mild overflow-hidden p-0">
        <h2 class="screen-reader-text">Map</h2>
        <div class="section-inner">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="mist-gmap" data-map-style="Silver">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12054.6984188397!2d29.1122137!3d40.9447982!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa536b6a65dfccaf4!2sRayemer%20-%20Rasyonel%20Yenilik%C3%A7i%20E%C4%9Fitim%20Merkezi!5e0!3m2!1str!2str!4v1638348290072!5m2!1str!2str" width=100% height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>





@endsection

