@php

    use App\Models\Course;
    $courses=Course::get();

@endphp


<div class="mobile-menu-wrapper d-lg-none">
    <a href="/" class="mobile-menu-toggle"><span class="toggle-lines"></span></a>
    <div class="mobile-logo-wrap mt-5 mb-4 text-center">
        <a href="#" class="mobile-logo-link"><img class="img-fluid" src="{{asset('images/logo/logo_main1.png')}}" alt="Mist" /></a>
    </div>
</div>

<header class="masterhead">

    <div class="set-header-sticky">
        <!-- Navbar for Desktop -->
        <div class="header-navbar  d-none d-lg-flex">
            <div class="container">
                <div class="header-parts-wrap">
                    <div class="header-parts-nav d-flex">
                        <div class="header-left d-flex">
                            <!-- Logo Wrapper -->
                            <div class="logo-wrap">
                                <a href="{{asset('/')}}" class="site-logo default-logo"><img class="img-fluid mr-3" alt="Rayemer"  src="{{asset('images/logo/logo_main1.png')}}"></a>
                                <a href="{{asset('/')}}" class="site-logo sticky-logo"><img class="img-fluid mr-3" alt="Rayemer" src="{{asset('images/logo/logo_main1.png')}}"></a>
                            </div>
                        </div> <!-- .header-left -->
                        <div class="header-right d-flex align-self-center ml-auto">
                            <!-- Site Menu -->
                            <ul class="nav site-menu d-none d-lg-flex">
                                <li class="nav-item active"><a href="{{asset('/')}}">Anasayfa</a></li>
                                <li class="nav-item"><a href="{{asset('hakkimizda')}}">Hakkımızda</a></li>
                                <li class="nav-item menu-item-has-children">
                                    <a href="">Üniversite Hazırlık Kursları</a>
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[0]->id.'/'.$courses[0]->slug)}}">{{$courses[0]->classes}}</a></li>
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[6]->id.'/'.$courses[6]->slug)}}">{{$courses[6]->classes}}</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item"><a href="{{asset('kurs/'.$courses[1]->id.'/'.$courses[1]->slug)}}">LGS Kursu</a></li>
                                 <li class="nav-item menu-item-has-children">
                                    <a href="">Ara Sınıf Kursları</a>
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[2]->id.'/'.$courses[2]->slug)}}">{{$courses[2]->classes}}</a></li>
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[3]->id.'/'.$courses[3]->slug)}}">{{$courses[3]->classes}}</a></li>
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[4]->id.'/'.$courses[4]->slug)}}">{{$courses[4]->classes}}</a></li>
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[5]->id.'/'.$courses[5]->slug)}}">{{$courses[5]->classes}}</a></li>


                                    </ul>
                                </li>
                                <li class="nav-item"><a href="{{asset('ozel-ders')}}">Özel Ders</a></li>

                                <li class="nav-item"><a href="{{asset('iletisim')}}">İletişim</a></li>
                            </ul>

                        </div><!-- .header-right -->
                    </div><!-- .header-parts-nav -->
                </div><!-- .header-parts-wrap -->
            </div><!-- .container -->
        </div><!-- .header-navbar -->

        <!-- Mobile Header for Tablet/Mobile -->
        <div class="mobile-header d-flex d-lg-none">
            <div class="container">
                <div class="header-parts-wrap">
                    <div class="header-parts-nav d-flex">
                        <div class="header-left d-flex">
                            <div class="logo-wrap">
                                <a href="{{asset('/')}}" class="site-logo default-logo"><img class="img-fluid mr-3" alt="Rayemer"  src="{{asset('images/logo/logo_main1.png')}}"></a>
                                <a href="{{asset('/')}}" class="site-logo sticky-logo"><img class="img-fluid mr-3" alt="Rayemer" src="{{asset('images/logo/logo_main1.png')}}"></a>
                            </div>
                        </div> <!-- .header-left -->
                        <div class="header-right d-flex align-self-center ml-auto">
                            <!-- Site Menu -->
                            <ul class="nav site-menu d-none d-lg-flex">
                                <li class="nav-item active"><a href="{{asset('/')}}">Anasayfa</a></li>
                                <li class="nav-item"><a href="{{asset('hakkimizda')}}">Hakkımızda</a></li>
                                <li class="nav-item menu-item-has-children">
                                    <a href="">Üniversite Hazırlık Kursları</a>
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[0]->id.'/'.$courses[0]->slug)}}">{{$courses[0]->classes}}</a></li>
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[6]->id.'/'.$courses[6]->slug)}}">{{$courses[6]->classes}}</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item"><a href="{{asset('kurs/'.$courses[1]->id.'/'.$courses[1]->slug)}}">LGS Kursu</a></li>
                                <li class="nav-item menu-item-has-children">
                                    <a href="">Ara Sınıf Kursları</a>
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[2]->id.'/'.$courses[2]->slug)}}">{{$courses[2]->classes}}</a></li>
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[3]->id.'/'.$courses[3]->slug)}}">{{$courses[3]->classes}}</a></li>
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[4]->id.'/'.$courses[4]->slug)}}">{{$courses[4]->classes}}</a></li>
                                        <li class="nav-item"><a href="{{asset('kurs/'.$courses[5]->id.'/'.$courses[5]->slug)}}">{{$courses[5]->classes}}</a></li>


                                    </ul>
                                </li>
                                <li class="nav-item"><a href="{{asset('ozel-ders')}}">Özel Ders</a></li>

                                <li class="nav-item"><a href="{{asset('iletisim')}}">İletişim</a></li>
                            </ul>

                        </div><!-- .header-right -->
                    </div><!-- .header-parts-nav -->
                </div><!-- .header-parts-wrap -->
            </div><!-- .container -->
        </div><!-- .mobile-header -->
    </div><!-- .header-sticky-part -->

    <div class="page-title-wrap">
        <div class="page-title-inner">
            <h1>{{$course->name}}</h1>
            <div class="breadcrumb-wrap d-inline-flex">
                <ul class="nav breadcrumb-list">
                    <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Ana sayfa</a></li>
                    <li class="breadcrumb-item"><span class="current-item">{{$course->name}}</span></li>
                </ul>
            </div>
        </div><!-- .page-title-inner -->
    </div><!-- .page-title-wrap -->


    <!--<section class="section section-top vh-100 set-as-background" data-bgimg="{{asset('images/bg/bg_unv.jpg')}}">
        <span class="abs-theme-bg"></span>
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-md-9 mt-0 mt-md-5 text-center">

                    <div class="slide-wrapper">
                        <div class="owl-carousel"  data-loop="1" data-nav="0" data-dots="0" data-items="1" data-tab="1" data-mobile="1" data-margin="0" data-autoplay="1" data-animation-in="fade-in">

                            <div class="item p-2">

                                <h2 class="mb-3 text-uppercase foxy-animate text-white" data-animate="fade-in-down" data-duration="100">{{$course->name}}</h2>
                                <a href="{{asset('iletisim')}}" class="btn btn-lg btn-light rounded-0 ml-3 mt-4 foxy-animate" data-animate="fade-in-right"  data-duration="350">Sizi Arayalım</a>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->



</header><!--Header-->



