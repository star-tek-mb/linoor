@extends('site.layouts.app')

@section('title') Portfolio @endsection

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
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            <!--Filter-->
            <div class="filters centered clearfix">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All<sup>{{ count($portfolios) }}</sup></li>
                    @foreach ($categories as $category)
                        <li class="filter" data-role="button" data-filter=".cat-{{ $category->slug }}">{{ $category->title }}<sup>{{ count($category->portfolios) }}</sup></li>
                    @endforeach
                </ul>
            </div>
            <div class="filter-list row">
                <!-- Gallery Item -->
                @foreach ($portfolios as $portfolio)
                <div class="gallery-item mix all cat-{{ $portfolio->category->slug }} col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image"><img src="/storage/upload/portfolio{{ $portfolio->id }}/cover.jpg" alt=""></figure>
                        <a href="/storage/upload/portfolio{{ $portfolio->id }}/cover.jpg" class="lightbox-image overlay-box" data-fancybox="gallery"></a>
                        <div class="cap-box">
                            <div class="cap-inner">
                                <div class="cat"><span>{{ $portfolio->category->title }}</span></div>
                                <div class="title"><h5>
                                    <a href="{{ route('site.portfolio.show', $portfolio->slug) }}">
                                        {{ $portfolio->title }}
                                    </a>
                                </h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>

@endsection