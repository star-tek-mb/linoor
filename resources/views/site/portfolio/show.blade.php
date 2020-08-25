@extends('site.layouts.app')

@section('title') {{ $portfolio->title }} - Portfolio @endsection

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Portfolio</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('site.portfolio.index') }}">Portfolio</a></li>
                        <li class="active">{{ $portfolio->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!-- Project Single -->
<section class="project-single style-two">
    <div class="auto-container">
        <figure class="image-box">
            <a href="/storage/upload/portfolio{{ $portfolio->id }}/cover.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="/storage/upload/portfolio{{ $portfolio->id }}/cover.jpg" alt="">
            </a>
        </figure>
        <div class="text-content">
            <div class="row clearfix">
                <!-- Text COl -->
                <div class="text-col col-lg-8 col-md-12 col-sm-12">
                    <div class="inner">
                        <h5>{{ $portfolio->title }}</h5>
                        {!! $portfolio->description !!}
                    </div>
                </div>
                <!-- Text COl -->
                <div class="text-col col-lg-4 col-md-12 col-sm-12">
                    <div class="inner">
                        <ul class="info">
                            <li><strong>Clients:</strong> <br>{{ $portfolio->client }} </li>
                            <li><strong>Category:</strong> <br>{{ $portfolio->category->title }}</li>
                            <li><strong>Date:</strong> <br>{{ date("F Y", $portfolio->begin) }} <br>{{ date("F Y", $portfolio->end) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection