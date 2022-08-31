@extends('frontend.layouts.master_sub')
@section('title','Rayemer')



@section('content')
    <section class="blog-section">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-full-width mb-5">
                             <h2 class="post-title mt-4">Hakkımızda</h2>

                            <p class=" align-self-center text-center text-lg-left">{!!$course->about_icerik!!}</p>

                        </div>
                    </div><!-- .col -->
                @include('frontend.layouts.course_rightbar')<!-- .col -->
                </div><!-- .row -->
            </div><!-- container -->
            <div class="restbeef_block_title align_center">
                @if(session()->has('message'))
                    <div class="alert {{session('alert')}} alert-dismissible fade show">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

                        @if(session('alert')=="success")
                            <p>Mesajınız gönderildi. En kısa zamanda size dönüş sağlanacaktır</p>
                        @else
                            <p>Beklenmeyen bir hata oluştu. Lütfen tekrar deneyiniz.</p>
                        @endif
                    </div>
                @endif
            </div>
            @include('frontend.layouts.applyform')

        </div><!-- .section-inner -->
    </section>




@endsection

