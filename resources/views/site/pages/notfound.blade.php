@extends('site.layouts.app')

@section('title') Not Found - Pages @endsection

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>404 Error</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('site.home') }}">Home</a></li>
                        <li><a href="{{ route('site.pages.team') }}">Pages</a></li>
                        <li class="active">404 Error</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Error Section-->
<section class="error-section">
    <div class="auto-container">
        <div class="content">
            <div class="big-text">
                <img src="/images/icons/404-image.png" class="img-fluid" alt="">
            </div>
            <h2>Sorry We Can't Find That Page!</h2>
            <div class="text">The page you are looking for was moved, removed, renamed or never existed.</div>
            <div class="error-form">
                <form method="post" action="blog-grid.html">
                    <div class="form-group clearfix">
                        <input type="search" name="email" value="" placeholder="Search here" required="">
                        <button type="submit" class="theme-btn"><span class="flaticon-search"></span></button>
                    </div>
                </form>
            </div>
            <div class="link-box">
                <a class="theme-btn btn-style-one" href="{{ route('site.home') }}">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Back to home</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection