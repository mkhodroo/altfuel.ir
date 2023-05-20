@extends('layout.main')

@php
    $title = $post->title;
    $description = $post->meta_desc;
@endphp

@section('content')
<div class="row g-4 m-3">
    <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden p-3">
            <h1 style="font-size: 25px">{{ $post->title }}</h1>
            <hr>
            @php
                echo $post->post_body;
            @endphp
        </div>
    </div>
</div>
@endsection