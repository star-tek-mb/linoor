@extends('site.layouts.app')

@section('title') Blog @endsection

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Blog Posts</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog Posts</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!-- News Section -->
<section class="news-section">
    <div class="auto-container">

        <div class="row clearfix">
            <!--News Block-->
            @foreach ($blogs as $blog)
            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="{{ route('site.blog.show', $blog->slug) }}"><img src="/storage/upload/blog{{ $blog->id }}/cover.jpg" alt=""></a>
                    </div>
                    <div class="lower-box">
                        <div class="post-meta">
                            <ul class="clearfix">
                                <li><span class="far fa-clock"></span> {{ $blog->created_at->format('d F Y') }}</li>
                            </ul>
                        </div>
                        <h5><a href="{{ route('site.blog.show', $blog->slug) }}">{{ $blog->title }}</a></h5>
                        <div class="text">{{ \Illuminate\Support\Str::limit(strip_tags($blog->description), 100, '...') }}</div>
                        <div class="link-box">
                            <a class="theme-btn" href="{{ route('site.blog.show', $blog->slug) }}"><span class="flaticon-next-1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="more-box">
            <a class="theme-btn btn-style-one" href="{{ route('site.blog.all') }}">
                <i class="btn-curve"></i>
                <span class="btn-title">Load more posts</span>
            </a>
        </div>
    </div>
</section>

@endsection