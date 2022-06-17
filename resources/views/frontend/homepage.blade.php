@extends('frontend.layouts.master')

@section('title','Rayemer')



@section('content')


    <style>
        .error{ color:red; }
    </style>
    <section class="featurebox-section pb-0 section-bg-mild">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Feature Box Vector -->
                        <div class="feature-box mb-5 mb-lg-0 px-4 py-5 bg-red rounded material-img-shadow">
                            <div class="feature-box-card" style="height: 200px">
                                <div class="feature-box mb-4">
                                    <img src="images/education/icon-1.png" class="feature-img" alt="Feature" />
                                </div>
                                <div class="feature-box-body">
                                    <div class="feature-box-title-wrap mb-3">
                                        <h5 class="text-white">6-7 ve 8.Sınıflar</h5>
                                    </div>
                                    <div class="feature-box-content-wrap">
                                        <p class="feature-box-content text-white">Hem okul derslerinde  hem de Lise Giriş Sınavlarında başarı sizin olacak.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .feature-box -->
                    </div><!-- .col -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Feature Box Vector -->
                        <div class="feature-box mb-5 mb-lg-0 px-4 py-5 bg-green rounded material-img-shadow">
                            <div class="feature-box-card" style="height: 200px">
                                <div class="feature-box mb-4">
                                    <img src="images/education/icon-2.png" class="feature-img" alt="Feature" />
                                </div>
                                <div class="feature-box-body">
                                    <div class="feature-box-title-wrap mb-3">
                                        <h5 class="text-white">9-10 ve 11. Sınıflar</h5>
                                    </div>
                                    <div class="feature-box-content-wrap">
                                        <p class="feature-box-content text-white">Okul derslerine destek olurken üniversite hazırlığın temellerini bu programla alacaksınız.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .feature-box -->
                    </div><!-- .col -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Feature Box Vector -->
                        <div class="feature-box mb-5 mb-md-0 px-4 py-5 bg-primary rounded material-img-shadow">
                            <div class="feature-box-card" style="height: 200px">
                                <div class="feature-box mb-4">
                                    <img src="images/education/icon-3.png" class="feature-img" alt="Feature" />
                                </div>
                                <div class="feature-box-body">
                                    <div class="feature-box-title-wrap mb-3">
                                        <h5 class="text-white">12 ve Mezunlar</h5>
                                    </div>
                                    <div class="feature-box-content-wrap">
                                        <p class="feature-box-content text-white">Uzman Öğretmenlerle ve Özel Takip Programı ile başarı kaçınılmaz. </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .feature-box -->
                    </div><!-- .col -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Feature Box Vector -->
                        <div class="feature-box px-4 py-5 bg-purple rounded material-img-shadow">
                            <div class="feature-box-card" style="height: 200px">
                                <div class="feature-box mb-4">
                                    <img src="images/education/icon-4.png" class="feature-img" alt="Feature" />
                                </div>
                                <div class="feature-box-body">
                                    <div class="feature-box-title-wrap mb-3">
                                        <h5 class="text-white">Özel Ders</h5>
                                    </div>
                                    <div class="feature-box-content-wrap">
                                        <p class="feature-box-content text-white">Birebir derslerle anlamadığınız konu, başaramayacağınız ders kalmayacak.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .feature-box -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="section-divider">
        <path fill="#f9f9f9" fill-opacity="1" d="M0,320L48,309.3C96,299,192,277,288,250.7C384,224,480,192,576,176C672,160,768,160,864,176C960,192,1056,224,1152,250.7C1248,277,1344,299,1392,309.3L1440,320L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
    </svg>

    <section class="classic-tab-section">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 pr-lg-5 text-center align-self-center">
                        <div class="about-image mb-5 mb-lg-0">
                            <img class="img-fluid rounded" alt="Tab Image" src="images/education/team1.jpg" />
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-6 align-self-center text-center text-lg-left">
                        <div class="section-title-wrapper mb-5">
                            <span class="section-sub-title">Hep birlikte daha iyi bir eğitim için çalışıyoruz.</span>
                            <h2 class="section-title">Uzman öğretmenlerimizle güçlü bir takımız.</h2>
                        </div>
                        <p class="about-content mb-5">Öğretmekten mutluluk duyan öğretmenlerimizle, öğretmenlerimizin enerjisi ile öğrenmekten keyif alan öğrencilerimizle, zamanında bilgilendirilen ve iyi bir karar verdiğini düşünen velilerimizle büyük bir aileyiz.</p>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="ratting-wrapper d-md-flex">
                                    <div class="ratting-wrap-inner pl-lg-5">
                                        <h4 class="testimonial-title mb-0">Başarı için her zaman yanınızdayız.</h4>
                                        <div class="justify-content-center ratting-stars d-flex mt-5 mb-5 mb-md-0">
                                            <img src="images/star.png" class="img-fluid mr-2" alt="star" />
                                            <img src="images/star.png" class="img-fluid mr-2" alt="star" />
                                            <img src="images/star.png" class="img-fluid mr-2" alt="star" />
                                            <img src="images/star.png" class="img-fluid mr-2" alt="star" />
                                            <img src="images/star.png" class="img-fluid mr-2" alt="star" />
                                        </div>
                                    </div>
                                    <div class="ratting-content pl-lg-5">
                                        <h4 class="mb-3"> “Bir aile sıcaklığını hissettiğim Rayemer için eğer 100 yıldız verebilseydim verirdim.” </h4>
                                        <div class="img-elementer">
                                            <p class ="text-muted mt-1">Hamiyet Özçelik</p>
                                            <span>LGS Velisi</span>
                                        </div>
                                    </div>
                                </div>
                                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="foxy-float-item element-animate-model-1" data-top="-40" data-left="0" data-width="500" data-zindex="-1">
                                    <path fill="#FFFFBB" d="M39.7,-43.1C52.2,-36.8,63.6,-25,67.6,-10.7C71.6,3.7,68.3,20.6,61.3,37.8C54.2,54.9,43.4,72.4,28.6,77.3C13.7,82.2,-5.3,74.5,-24.8,67.7C-44.2,60.8,-64.1,54.7,-72.2,41.4C-80.2,28.1,-76.4,7.6,-68.8,-8.1C-61.3,-23.9,-50,-35,-37.9,-41.3C-25.8,-47.7,-12.9,-49.3,0.4,-49.7C13.6,-50.1,27.2,-49.4,39.7,-43.1Z" transform="translate(100 100)" />
                                </svg>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>


    <style>
        input.transparent-input{
            background-color:rgba(0,0,0,0) !important;
            border: 2px solid white;
            padding: 10px;
            border-radius: 50px 20px;
            color: white;
        }
        input::placeholder {
            color: white !important;
            opacity: 1;
        }
    </style>

    <section class="client-section set-as-background background-fixed" data-bgimg="images/education/8.jpg">
        <span class="abs-theme-bg"></span>
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 text-center">
                        <h2 class="section-title text-white mb-3">Deneme Kulübü</h2>
                        <p class="about-content text-white mb-3">Binlerce kişi arasında durumunuzu öğrenmek ister misiniz? En iyi yayınlardan oluşan kurumsal denemelerimize girin. Ayrıntılı bilgi almak için lütfen kayıt olun, sizi arayalım.</p>

                        <div class="row justify-content-center input-group">

                            <form action="" name="registration">
                                <div class="form-group">
                                    <input class="transparent-input" type="text" name="name" id="name" placeholder="Ad Soyad">


                                    <input class="transparent-input" type="text" name="phone" id="phone" placeholder="Telefon">


                                    <input class="transparent-input" type="email" name="email" id="email" placeholder="Email">

                                    <input class="transparent-input"  type="text" name="sinif" id="sinif"  placeholder="Sınıf">
                                </div>
                                <button type="button" class="btn btn-outline-light submit">Kayıt Ol</button>
                            </form>
                    </div><!-- .col -->
                </div>
            </div>
        </div>
    </section>

    <section class="classic-tab-section pb-0">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pr-lg-5 align-self-center text-center">
                        <div class="about-image mb-5 mb-lg-0">
                            <img class="img-fluid rounded" alt="Tab Image" src="images/education/sss.jpg" />
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-6 text-center text-lg-left">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title-wrapper mb-5">
                                        <h2 class="section-title">Aklınızda soru kalmasın!</h2>
                                    </div>
                                    <div class="accordion" id="accordion-widget-2">
                                        <div class="card accordion-item mb-3 rounded-border">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#accordion-widget-2-tab-1" aria-expanded="true" aria-controls="accordion-widget-2-tab-1">
                                                        <span class="active-icon mr-2"><i class="fa fa-bell-o"></i></span><span class="inactive-icon mr-2"><i class="fa fa-bell-slash-o"></i></span><span class="accordion-text pl-4">Neden sizi hiç duymadım ?</span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="accordion-widget-2-tab-1" class="collapse show" data-parent="#accordion-widget-2">
                                                <div class="card-body">
                                                    Öğrenci ve veli memnuniyet odaklı bir kurumuz. Yeni kayıtlarımızın %90'ı başka bir velinin referansı ile gelmektedir. Çok fazla reklam yapmadığımız için bizi duymamış olmanız çok normal.
                                                </div>
                                            </div>
                                        </div><!-- .accordion-item -->
                                        <div class="card accordion-item mb-3 rounded-border">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#accordion-widget-2-tab-2" aria-expanded="true" aria-controls="accordion-widget-2-tab-2">
                                                        <span class="active-icon mr-2"><i class="fa fa-bell-o"></i></span><span class="inactive-icon mr-2"><i class="fa fa-bell-slash-o"></i></span><span class="accordion-text pl-4">Kayıt öncesi vaatler, kayıt sonrası unutuluyor mu?</span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="accordion-widget-2-tab-2" class="collapse" data-parent="#accordion-widget-2">
                                                <div class="card-body">
                                                    Tutamayacağımız hiç bir vaatte bulunmuyoruz. Kayıt esnasında ne söylersek onu mutlaka gerçekleştiriyoruz.
                                                </div>
                                            </div>
                                        </div><!-- .accordion-item -->
                                        <div class="card accordion-item mb-3 rounded-border">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#accordion-widget-2-tab-3" aria-expanded="true" aria-controls="accordion-widget-2-tab-3">
                                                        <span class="active-icon mr-2"><i class="fa fa-bell-o"></i></span><span class="inactive-icon mr-2"><i class="fa fa-bell-slash-o"></i></span><span class="accordion-text pl-4">Günlük takip programı nedir?</span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="accordion-widget-2-tab-3" class="collapse" data-parent="#accordion-widget-2">
                                                <div class="card-body">
                                                    Danışmanlarımız tarafından her hafta öğrenciye ödevlendirme yapılır. Takip programı bu ödevlerin yapılıp yapılmadığını her gün kontrol ederek öğrenciye motivasyona yönelik değerlendirme bildirimi gönderir. Ayrıca LGS ve YKS'ye hazırlanan tüm öğrencilerimizin girmiş olduğu denemelerin analizleri de sisteme girilerek hangi konu iyi hangi konuda eksik var raporu çıkarılır.
                                                </div>
                                            </div>
                                        </div><!-- .accordion-item -->
                                        <div class="card accordion-item rounded-border">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#accordion-widget-2-tab-4" aria-expanded="true" aria-controls="accordion-widget-2-tab-4">
                                                        <span class="active-icon mr-2"><i class="fa fa-bell-o"></i></span><span class="inactive-icon mr-2"><i class="fa fa-bell-slash-o"></i></span><span class="accordion-text pl-4">Yeriniz nerde, fiziki alanınız ferah mı?</span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="accordion-widget-2-tab-4" class="collapse" data-parent="#accordion-widget-2">
                                                <div class="card-body">
                                                    Yerimiz Küçükyalı merkezde migros var, aynı binanın 2.katında. Yeterli genişlikte sınıflarımız, kocaman koridorlarımız var. Kahve içmeye bekleriz, ardından kurumu beraber gezebiliriz.
                                                </div>
                                            </div>
                                        </div><!-- .accordion-item -->
                                    </div><!-- .accordion -->
                                </div><!-- .col -->
                            </div>
                        </div><!-- .container -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>

    <section><div class="col-md-9 text-center mb-md-1"><p><p></p></p></div></section>

    <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="section-divider">
        <path fill="#f9f9f9" fill-opacity="1" d="M0,320L48,309.3C96,299,192,277,288,250.7C384,224,480,192,576,176C672,160,768,160,864,176C960,192,1056,224,1152,250.7C1248,277,1344,299,1392,309.3L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>-->
    <section class="client-section set-as-background background-fixed" data-bgimg="images/education/testimonials.jpg">
        <span class="abs-theme-bg"></span>
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 text-center mb-md-5">
                        <h2 class="text-white mb-3">Bizim için ne dediler?</h2>
                        <img src="images/medical/quotes.png" class="img-fluid quote-img" alt="Quote" />
                    </div><!-- .col -->
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section pt-md-0 pb-0">
        <div class="section-inner">
            <div class="container">
                <div class="testimonial-attached">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slide-wrapper">
                                <div class="owl-carousel controls-white"  data-loop="1" data-nav="0" data-dots="0" data-items="1" data-tab="1" data-mobile="1" data-margin="30" data-hash="zero" data-autoplay="1">
                                    <div class="item p-2">
                                        <!-- Testimonial-Grid -->
                                        <div class="testimonial-wrap-inner material-img-shadow p-5 rounded-border bg-white text-center">
                                            <div class="testimonial-content-wrap-grid">
                                                <p class="attached-content mb-3">Kızım Lizge Özçelik bu yıl LGS Sınavına RAYEMER 'de hazırlandı.

                                                    Sürecin en başından sonuna kadar hazırladıkları  çok güzel bir program (ayrıca belirlenen  programın üzerinede çıkıp çocuklarımızın ihtiyaç ve seviyelerine göre en iyi şekilde hazırladılar .)

                                                    Kızım Lizge Özçelik RAYEMER'de LGS Sınavına hazırlanarak daha başlarken bir adım önde başlamış oldu.

                                                    LGS Sınavındada  sayısalda 1 yanlış ,sözelde 2 yanlış çıkardı.Toplamda (yanlışların doğruları götürmesiyle) 86 netle yüzde 0.2'lik dilime girmeyi başardı.</p>
                                            </div>

                                            <div class="ratting-stars d-flex mb-1 justify-content-center">
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                            </div>
                                            <h5 class="testimonial-tittle">Hamiyet Özçelik</h5>
                                        </div>
                                    </div><!-- .item -->
                                    <div class="item p-2">
                                        <!-- Testimonial-Grid -->
                                        <div class="testimonial-wrap-inner material-img-shadow p-5 rounded-border bg-white text-center">
                                            <div class="testimonial-content-wrap-grid">
                                                <p class="attached-content mb-3">Merhabalar ben Berke 2021 YKS sınavında eşit ağırlık puanı ile Türkiye 61. oldum. Böyle bir sonucu alabilmek için sadece son yıl değil eğitim hayatım boyunca iyi çalıştım ama tabii ki son yıl tempo oldukça yüksekti.
                                                    Yüksek tempo ve stresli bir yıl...
                                                    Bu son yılda Rayemer ailesi içinde olmamın başarımda önemli katkısı oldu. Özellikle danışmanlık sistemi ile çalışkan öğrencilere dahi büyük katkılar sağlayabilen bir kurum Rayemer.</p>
                                            </div>

                                            <div class="ratting-stars d-flex mb-1 justify-content-center">
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                            </div>
                                            <h5 class="testimonial-tittle">Berke Can</h5>

                                        </div>
                                    </div><!-- .item -->
                                    <div class="item p-2">
                                        <!-- Testimonial-Grid -->
                                        <div class="testimonial-wrap-inner material-img-shadow p-5 rounded-border bg-white text-center">
                                            <div class="testimonial-content-wrap-grid">
                                                <p class="attached-content mb-3">Öncelikle öğretmenlerin öğrencilerine yaklaşımı çok iyi olan bir kurum rayemer. Ayrıca öğrenci takip sistemi çok güzel, gerçekten çok verimli oluyor. Bunu bahsettiğim şekilde takip edilen bir öğrenci olarak söylüyorum. Öğrenciyi sıkmayan, motive eden bir sistemleri var gerçekten de. İmkanı olan herkese tavsiye ederim. Her şey çok güzeldi, teşekkürler rayemer ailesi :)</p>
                                            </div>

                                            <div class="ratting-stars d-flex mb-1 justify-content-center">
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                                <img src="images/star.png" class="img-fluid" alt="star" />
                                            </div>
                                            <h5 class="testimonial-tittle">Bilge Nur</h5>

                                        </div>
                                    </div><!-- .item -->
                                </div><!-- .owl-carousel -->
                            </div><!-- .slide-wrapper -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
            </div><!-- .container -->
        </div><!-- .section-inner -->
    </section>
    <div class="modal fade" id="myModal" tabindex="-1"
         role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- w-100 class so that header
                div covers 100% width of parent div -->
                    <h5 class="modal-title w-100"
                        id="exampleModalLabel">
                        YKS SON PROVA
                    </h5>
                    <button type="button" class="close"
                            data-dismiss="modal" aria-label="Kapat">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <!--Modal body with image-->
                <div class="modal-body">
                    <img src="images/yks_son_prova.png" style="width: 100%" />
                </div>

            </div>
        </div>
    </div>


    <script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //$("#myModal").modal('show');
        });
        $('.submit').click(function(){



            $.ajaxSetup({
                headers:
                    {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });

            $.ajax({
                type: "POST",
                url: "{{URL::route('send_test')}}",
                data:{
                    name:$('#name').val(),
                    email:$('#email').val(),
                    phone:$('#phone').val(),
                    sinif:$('#sinif').val(),


                },
                cache: false,
                success: function(response) {
                    swal(
                        "Başarılı!",
                        "Kaydınız gerçekleştirildi. Genel denemeler öncesi sizi arayıp bilgi vereceğiz.",
                        "success"
                    ).then((result) => {
                        location.reload();
                    });



                },
                failure: function (response) {
                    swal(
                        "Bir problem çıktı",
                        "Mesajınız gönderilemedi. Lütfen yeniden deneyiniz.", // had a missing comma
                        "error"
                    )
                }
            });

        });


    </script>



@endsection

