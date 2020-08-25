@extends('site.layouts.app')

@section('title') {{ $blog->title }} - Blog @endsection

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
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('site.blog.index') }}">Blog</a></li>
                        <li class="active">{{ $blog->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-details">
                    <!--News Block-->
                    <div class="post-details">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="blog-single.html"><img src="/storage/upload/blog{{ $blog->id }}/cover.jpg" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> {{ $blog->created_at->format('d F Y') }}</li>
                                    </ul>
                                </div>
                                <h4>{{ $blog->title }}</h4>
                                <div class="text">
                                    {!! $blog->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar blog-sidebar">
                    <!--Sidebar Widget-->
                    <div class="sidebar-widget search-box">
                        <div class="widget-inner">
                            <form method="post" action="blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search" required="">
                                    <button type="submit"><span class="icon flaticon-magnifying-glass-1"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget recent-posts">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Latest Posts</h4>
                            </div>

                            @foreach ($blogs as $blog)
                            <div class="post">
                                <figure class="post-thumb"><img src="/storage/upload/blog{{ $blog->id }}/cover.jpg" alt=""></figure>
                                <h5 class="text"><a href="{{ route('site.blog.show', $blog->slug) }}">{{ $blog->title }}</a></h5>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>

@endsection