@extends('site.layouts.app')

@section('title') Testimonials - Pages @endsection

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Testimonials</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('site.home') }}">Home</a></li>
                        <li><a href="{{ route('site.pages.team') }}">Pages</a></li>
                        <li class="active">Testimonials</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Testimonials Section-->
<section class="testimonials-section testimonials-page">
    <div class="auto-container">
            <div class="row clearfix">
            <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner">
                    <div class="icon"><span>“</span></div>
                    <div class="info">
                        <div class="image"><a href="{{ route('site.pages.team') }}"><img src="/images/resource/author-1.jpg" alt=""></a></div>
                        <div class="name">Shirley Smith</div>
                        <div class="designation">Director</div>
                    </div>
                    <div class="text">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
                </div>
            </div>
            <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner">
                    <div class="icon"><span>“</span></div>
                    <div class="info">
                        <div class="image"><a href="{{ route('site.pages.team') }}"><img src="/images/resource/author-2.jpg" alt=""></a></div>
                        <div class="name">Mike hardson</div>
                        <div class="designation">Director</div>
                    </div>
                    <div class="text">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
                </div>
            </div>
            <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner">
                    <div class="icon"><span>“</span></div>
                    <div class="info">
                        <div class="image"><a href="{{ route('site.pages.team') }}"><img src="/images/resource/author-3.jpg" alt=""></a></div>
                        <div class="name">Sarah albert</div>
                        <div class="designation">Director</div>
                    </div>
                    <div class="text">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
                </div>
            </div>
            <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner">
                    <div class="icon"><span>“</span></div>
                    <div class="info">
                        <div class="image"><a href="{{ route('site.pages.team') }}"><img src="/images/resource/author-4.jpg" alt=""></a></div>
                        <div class="name">kevin martin</div>
                        <div class="designation">Director</div>
                    </div>
                    <div class="text">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
                </div>
            </div>
            <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner">
                    <div class="icon"><span>“</span></div>
                    <div class="info">
                        <div class="image"><a href="{{ route('site.pages.team') }}"><img src="/images/resource/author-5.jpg" alt=""></a></div>
                        <div class="name">christine eve</div>
                        <div class="designation">Director</div>
                    </div>
                    <div class="text">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
                </div>
            </div>
            <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner">
                    <div class="icon"><span>“</span></div>
                    <div class="info">
                        <div class="image"><a href="{{ route('site.pages.team') }}"><img src="/images/resource/author-6.jpg" alt=""></a></div>
                        <div class="name">john smith</div>
                        <div class="designation">Director</div>
                    </div>
                    <div class="text">There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection