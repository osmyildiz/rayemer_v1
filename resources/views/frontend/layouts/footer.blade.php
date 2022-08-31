
@php

    use App\Models\Course;
    $courses=Course::get();

@endphp
<footer class="section footer-section pb-0">
    <div class="widgets-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-lg-0 mb-4">
                    <div class="widget-wrap about-widget mb-5">
                        <h2 class="widget-title">Hakkımızda</h2>
                        <div class="widget-content">
                            <p>
                                RAYEMER açılımı Rasyonel – Yenilikçi Eğitim Merkezi olan bir eğitim kurumudur. Eğitimin içinden gelen kurucuları ile öğrencilerin ve ailelerin nitelikli ve kaliteli bir eğitim arayışına cevap vermeye çalışan bu kurumda öncelikli amacımız bireyin kendini keşfetmesini sağlamaktır. RAYEMER ailesi olarak inanıyoruz ki, kendi yeteneklerinin farkına varan, kendi çalışma yöntemini bulan bir öğrencinin başarısız olmasına imkan yoktur.
                            </p>
                        </div><!--.widget-content -->
                    </div><!--.widget-wrap -->

                </div><!-- .col -->
                <div class="col-md-6 col-lg-3 mb-lg-0 mb-4">
                    <div class="widget-wrap company-links-widget">
                        <h2 class="widget-title">Kurslar</h2>
                        <div class="widget-content">
                            <ul class="nav flex-column nav-light-to-theme icon-nav">
                                <li class="nav-item"><a href="{{asset('kurs/'.$courses[0]->id.'/'.$courses[0]->slug)}}" class="nav-link">{{$courses[0]->classes}}</a></li>
                                <li class="nav-item"><a href="{{asset('kurs/'.$courses[6]->id.'/'.$courses[6]->slug)}}" class="nav-link">{{$courses[6]->classes}}</a></li>
                                <li class="nav-item"><a href="{{asset('kurs/'.$courses[1]->id.'/'.$courses[1]->slug)}}" class="nav-link">{{$courses[1]->classes}}</a></li>
                                <li class="nav-item"><a href="{{asset('kurs/'.$courses[2]->id.'/'.$courses[2]->slug)}}" class="nav-link">{{$courses[2]->classes}}</a></li>
                                <li class="nav-item"><a href="{{asset('kurs/'.$courses[3]->id.'/'.$courses[3]->slug)}}" class="nav-link">{{$courses[3]->classes}}</a></li>
                                <li class="nav-item"><a href="{{asset('kurs/'.$courses[4]->id.'/'.$courses[4]->slug)}}" class="nav-link">{{$courses[4]->classes}}</a></li>
                                <li class="nav-item"><a href="{{asset('kurs/'.$courses[5]->id.'/'.$courses[5]->slug)}}" class="nav-link">{{$courses[5]->classes}}</a></li>
                            </ul>
                        </div><!--.widget-content -->
                    </div><!--.widget-wrap -->
                </div><!-- .col -->
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <div class="widget-wrap contact-info-widget">
                        <h2 class="widget-title">Bize Ulaşın</h2>
                        <div class="widget-content">
                            <ul class="nav flex-column nav-light-to-theme">
                                <li class="nav-item"><span class="ti-location-pin contact-icons"></span>Çınar Mh. Bağdat Cd. No: 179 Kat:2, 34841 Maltepe/İstanbul, Türkiye</li>
                                <li class="nav-item"><span class="ti-mobile contact-icons"></span><a href="tel://02165493049" class="nav-link">0216 5493049</a></li>
                                <li class="nav-item"><span class="ti-mobile contact-icons"></span><a href="tel://05525493049" class="nav-link">0552 5493049</a></li>
                                <li class="nav-item"><span class="ti-email contact-icons"></span><a href="mailto:rayemerkurs@gmail.com" class="nav-link email-id">rayemerkurs@gmail.com</a></li>

                                 </ul>
                        </div><!--.widget-content -->
                    </div><!--.widget-wrap -->
                </div><!-- .col -->
                <div class="col-md-6 col-lg-3">
                    <div class="widget-wrap post-tags-widget">
                        <h2 class="widget-title">Tags</h2>
                        <div class="widget-content">
                            <ul class="nav post-tags-list">
                                <li><a href="{{asset('kurs/'.$courses[0]->id.'/'.$courses[0]->slug)}}" class="post-tags btn btn-outline-dark">Üniversite Hazırlık</a></li>
                                <li><a href="{{asset('kurs/'.$courses[0]->id.'/'.$courses[0]->slug)}}" class="post-tags btn btn-outline-dark">TYT</a></li>
                                <li><a href="{{asset('kurs/'.$courses[0]->id.'/'.$courses[0]->slug)}}" class="post-tags btn btn-outline-dark">AYT</a></li>
                                <li><a href="{{asset('kurs/'.$courses[0]->id.'/'.$courses[0]->slug)}}" class="post-tags btn btn-outline-dark">YKS</a></li>
                                <li><a href="{{asset('kurs/'.$courses[1]->id.'/'.$courses[1]->slug)}}" class="post-tags btn btn-outline-dark">LGS</a></li>
                                <li><a href="{{asset('kurs/'.$courses[1]->id.'/'.$courses[1]->slug)}}" class="post-tags btn btn-outline-dark">Liselere Giriş</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-dark">Özel Ders</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-dark">Maltepe</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-dark">Küçükyalı</a></li>
                                <li><a href="#" class="post-tags btn btn-outline-dark">Bostancı</a></li>
                                <li><a href="{{asset('kurs/'.$courses[2]->id.'/'.$courses[2]->slug)}}" class="post-tags btn btn-outline-dark">11.Sınıf</a></li>
                                <li><a href="{{asset('kurs/'.$courses[4]->id.'/'.$courses[4]->slug)}}" class="post-tags btn btn-outline-dark">7.Sınıf</a></li>
                                <li><a href="{{asset('ozel-ders')}}" class="post-tags btn btn-outline-dark">Özel Ders</a></li>
                                <li><a href="http://aidtakip.com" class="post-tags btn btn-outline-dark">Aid Takip</a></li>
                            </ul>
                        </div><!--.widget-content -->
                    </div><!--.widget-wrap -->
                </div><!--.col -->
            </div>
        </div>
    </div>

    <div class="footer-middle pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-auto mb-2 mb-md-0 text-center text-md-left">
                    <div class="logo-wrap">
                        <a href="index.html" class="site-logo"><img class="img-fluid" src="images/logo/logo_main.png" alt="Mist"></a>
                    </div>
                </div>
                <div class="col-md align-self-center mt-3 mt-md-0">
                    <div class="footer-menu-wrap">
                        <ul class="nav social-icons social-icons own-social-icons justify-content-center justify-content-md-end">
                            <li class="nav-item"><a href="https://www.facebook.com/rayemercom"  class="facebook-icon"><span class="ti-facebook small-icon"></span></a></li>
                            <li class="nav-item"><a href="https://www.twitter.com/rayemercom"   class="twitter-icon"><span class="ti-twitter small-icon"></span></a></li>
                            <li class="nav-item"><a href="https://www.instagram.com/rayemercom" class="instagram-icon"><span class="ti-instagram small-icon"></span></a></li>
                            <li class="nav-item"><a href="https://www.youtube.com/rayemerkurs"  class="youtube-icon"><span class="ti-youtube small-icon"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md">
                    <p class="text-white text-muted mt-3 text-center">&copy; Copyright 2021. Tüm hakları saklıdır. <a href="#" class="text-muted">Rayemer</a></p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top" id="back-to-top"><i class="ti-angle-up"></i></a>

</footer><!--footer-->
