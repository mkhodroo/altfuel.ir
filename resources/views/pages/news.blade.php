@extends('layout.main')

@php
    $title = "اخبار صنعت cng و سوخت های جایگزین";
    $description = "آخرین و بروزترین اخبار صنعت cng و سوخت های جایگزین را میتوانید از سایت اتحادیه کشوری سوخت های جایگزین و خدمات وابسته مطالعه نمایید.";
@endphp

@section('content')
    @php
        $posts = json_decode(file_get_contents('https://l.altfuel.ir/api/blog/get-by-catagory/news'));

    @endphp
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">تازه ترین اخبار صنعت cng</h1>
                <p class="mb-1"></p>
            </div>
            @foreach ($posts as $post)
                <div class="row g-4">
                    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4" style="text-align: right !important">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-1.jpg" alt="">
                                <h5 class="fw-bold mb-1">{{ $post->title ?? '' }}</h5>
                                <small>{{ $post->meta_desc ?? '' }}</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-1">
                                <a class="btn text-primary bg-white" href="{{ $post->readMoreLink }}">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
@endsection