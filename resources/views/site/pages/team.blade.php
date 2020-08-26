@extends('site.layouts.app')

@section('title') Team - Pages @endsection

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Team Members</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('site.home') }}">Home</a></li>
                        <li><a href="{{ route('site.pages.team') }}">Pages</a></li>
                        <li class="active">Team Members</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Team-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="{{ route('site.about') }}"><img src="/images/resource/team-1.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="#">Kevin martin</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="{{ route('site.about') }}"><img src="/images/resource/team-2.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="#">Jessica Brown</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="{{ route('site.about') }}"><img src="/images/resource/team-3.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="#">Mike Hardson</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="{{ route('site.about') }}"><img src="/images/resource/team-4.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="#">Rose ford</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="{{ route('site.about') }}"><img src="/images/resource/team-5.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="#">John Albert</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="{{ route('site.about') }}"><img src="/images/resource/team-6.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="#">Christine eve</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection