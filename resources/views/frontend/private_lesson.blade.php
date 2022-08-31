@extends('frontend.layouts.master_sub')
@section('title','Rayemer')



@section('content')
    <section class="blog-section">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-full-width mb-5">
                            {!!$course->about_icerik!!}
                        </div>
                    </div><!-- .col -->
                @include('frontend.layouts.course_rightbar')<!-- .col -->
                </div><!-- .row -->
            </div><!-- container -->
            @include('frontend.layouts.applyform')

        </div><!-- .section-inner -->
    </section>




@endsection

