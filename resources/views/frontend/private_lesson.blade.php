@extends('frontend.layouts.master')
@section('title','Rayemer')



@section('content')
    <section class="blog-section">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-full-width mb-5">
                             <h2 class="post-title mt-4">Bire-bir Özel Ders</h2>
<h3>ÖZGÜVEN VE BAŞARILI ÖĞRENME</h3>
                            <p class=" align-self-center text-center text-lg-left">
                                Öğretmenimiz, kişiye özel öğrenme planını hazırlamak için çocuğunuzla birlikte çalışır. Geliştirilmiş konsantrasyon, odaklanma ve öğrenme tutkusu, çocuğunuzu okulda başarıya taşıyacak.</p>

                        </div>
                    </div><!-- .col -->
                @include('frontend.layouts.course_rightbar')<!-- .col -->
                </div><!-- .row -->
            </div><!-- container -->
            @include('frontend.layouts.applyform')

        </div><!-- .section-inner -->
    </section>




@endsection

