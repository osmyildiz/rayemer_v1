@extends('frontend.layouts.master')
@section('title','Rayemer')



@section('content')
    <section class="blog-section">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-full-width mb-5">
                            <img src="images/education/tytayt.jpg" class="img-fluid rounded" alt="post" />
                            <h2 class="post-title mt-4">Üniversite Hazırlık Kursu (YKS-TYT-AYT)</h2>
                            <ul class="nav post-top-meta mb-3">
                                <li class="post-author"><span class="ti-user mr-1 theme-color"></span><a href="#" class="text-muted mr-3">12.sınıf ve Mezun</a></li>
                                <li class="post-date"><span class="ti-calendar mr-1 theme-color"></span><a href="#" class="text-muted mr-3">YKS-TYT-AYT</a></li>
                                <li class="post-comment"><span class="ti-location-pin mr-1 theme-color"></span><a href="#" class="text-muted">Maltepe, Küçükyalı, Bostancı</a></li>
                            </ul>
                            <h6>Yoğun tempo, 6-12 kişilik sınıflar, uzman öğretmenler ve günlük takip programı.</h6>
                            <p>12. sınıfta yoğun bir şekilde üniversiteye hazırlananan öğrencilerimiz haftalık hedeflerini danışmanları gözetiminde alır. Haftalık hedefler günlük hedeflere bölünerek öğrencinin motivasyonunu kaybetmemesi için günlük sabah ve akşam olmak üzere takip edilir. Sürekli takip altında olan öğrenci başarı için takip edilmeyenlere göre daha önde yer alır. Her hafta performans değerlendirmesi yapılır ve hedefleri yavaş yavaş artırılır. Böylece öğrenci haftalık 1500-2500 arasında soru çözmeye başlar. Bu seviyede her hafta soru çözülünce her dersten en az 5-6 kaynak bitirilir. Yapılan kurumsal denemelerle öğrenciye Türkiye genelinde gelişimi analiz etme imkanı sağlanır.</p><p>Küçükyalı Merkez Migros üstünde hizmetinizdeyiz..<br></p>
                            @include('frontend.layouts.share')
                        </div>
                    </div><!-- .col -->
                @include('frontend.layouts.course_rightbar')<!-- .col -->
                </div><!-- .row -->
            </div><!-- container -->
            @include('frontend.layouts.applyform')

        </div><!-- .section-inner -->
    </section>




@endsection

