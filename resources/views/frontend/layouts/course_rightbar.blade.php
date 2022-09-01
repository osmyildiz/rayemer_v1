@php

    use App\Models\Course;
    $courses=Course::get();

@endphp
<div class="col-lg-4 pl-lg-5">
    <div class="row justify-content-center foxy-sticky-obj" data-offset="100">

        <div class="col-lg-12 col-md-6">
            <div class="categories-widget mb-5">
                <h4 class="widget-title mb-4">Kurslarımız</h4>
                <ul class="widget-items p-0">
                    <li class="cat-item mb-4 pb-3"><a href="{{asset('kurs/'.$courses[0]->id.'/'.$courses[0]->slug)}}">{{$courses[0]->classes}}</a></li>
                    <li class="cat-item mb-4 pb-3"><a href="{{asset('kurs/'.$courses[6]->id.'/'.$courses[6]->slug)}}">{{$courses[6]->classes}}</a></li>
                    <li class="cat-item mb-4 pb-3"><a href="{{asset('kurs/'.$courses[1]->id.'/'.$courses[1]->slug)}}">{{$courses[1]->classes}}</a></li>
                    <li class="cat-item mb-4 pb-3"><a href="{{asset('kurs/'.$courses[2]->id.'/'.$courses[2]->slug)}}">{{$courses[2]->classes}}</a></li>
                    <li class="cat-item mb-4 pb-3"><a href="{{asset('kurs/'.$courses[3]->id.'/'.$courses[3]->slug)}}">{{$courses[3]->classes}}</a></li>
                    <li class="cat-item mb-4 pb-3"><a href="{{asset('kurs/'.$courses[4]->id.'/'.$courses[4]->slug)}}">{{$courses[4]->classes}}</a></li>
                    <li class="cat-item mb-4 pb-3"><a href="{{asset('kurs/'.$courses[5]->id.'/'.$courses[5]->slug)}}">{{$courses[5]->classes}}</a></li>
                    <li class="cat-item mb-4 pb-3"><a href="{{asset('ozel-ders')}}">Özel Ders</a></li>

                </ul>
            </div>
        </div><!-- .col -->

    </div><!-- .row -->
</div>

