@extends('frontend.layouts.master_sub')
@section('title','Rayemer')



@section('content')
    <section class="blog-section">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-full-width mb-5">
                            <img src="{{asset($course->img_url)}}" class="img-fluid rounded" alt="post" />
                            <h2 class="post-title mt-4">{{$course->name}}</h2>
                            <ul class="nav post-top-meta mb-3">
                                <li class="post-author"><span class="ti-user mr-1 theme-color"></span><a href="#" class="text-muted mr-3">{{$course->classes}}</a></li>
                                <li class="post-date"><span class="ti-calendar mr-1 theme-color"></span><a href="#" class="text-muted mr-3">{{$course->short_name}}</a></li>
                                <li class="post-comment"><span class="ti-time mr-1 theme-color"></span><a href="#" class="text-muted">Haftalık {{$course->ders_saati}} saat</a></li>
                            </ul>
                            <h6>{!!$course->summary!!}</h6>
                            <p>{!!$course->content!!}</p>
                            <div>
                                {!! $course->subject !!}
                            </div>


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

