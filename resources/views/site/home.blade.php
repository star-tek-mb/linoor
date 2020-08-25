@extends('site.layouts.app')

@section('title') Home @endsection

@section('content')
<!-- Banner Section -->
<section class="banner-section banner-one">

    <div class="left-based-text">
        <div class="base-inner">
            <div class="hours">
                <ul class="clearfix">
                    <li><span>mon - fri</span></li>
                    <li><span>9am - 7pm</span></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html#"><span>Twitter</span></a></li>
                    <li><a href="index.html#"><span>Facebook</span></a></li>
                    <li><a href="index.html#"><span>Youtube</span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="banner-carousel owl-theme owl-carousel">
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url(/images/main-slider/1.jpg);"></div>
            <div class="left-top-line"></div>
            <div class="right-bottom-curve"></div>
            <div class="right-top-curve"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner">
                            <div class="sub-title">Доброго пожаловать!</div>
                                        <h1>Студия <br>Разработки</h1>
                            <div class="link-box">
                                <a class="theme-btn btn-style-one" href="about.html">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Открой для себя больше</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url(/images/main-slider/2.jpg);"></div>
            <div class="left-top-line"></div>
            <div class="right-bottom-curve"></div>
            <div class="right-top-curve"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="content">
                        <div class="inner">
                            <div class="sub-title">Доброго пожаловать!</div>
                            <h1>Студия <br>Разработки</h1>
                            <div class="link-box">
                                <a class="theme-btn btn-style-one" href="about.html">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Открой для себя больше</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Banner Section -->

<!--Services Section-->
<section class="services-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title Block-->
            <div class="title-block col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>We Shape the Perfect <br>Solutions<span class="dot">.</span></h2>
                        <div class="lower-text">We are committed to providing our customers with exceptional service while offering our employees the best training.</div>
                    </div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-responsive"></span></div>
                    <h6><a href="web-development.html">Website <br>Development</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-computer"></span></div>
                    <h6><a href="graphic-designing.html">graphic <br>designing</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                    <h6><a href="digital-marketing.html">digital <br>marketing</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-development"></span></div>
                    <h6><a href="seo.html">seo & content <br>writing</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-app-development"></span></div>
                    <h6><a href="app-development.html">App <br>Development</a></h6>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <div class="icon-box"><span class="flaticon-ui"></span></div>
                    <h6><a href="ui-designing.html">Ui/UX <br>designing</a></h6>
                </div>
            </div>
        </div>
    </div>
</section>

<!--About Section-->
<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/featured-image-1.jpg" alt=""></div>
                    <div class="image-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="images/resource/featured-image-2.jpg" alt=""></div>
                </div>
            </div>
            <!--Text Column-->
            <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>We’re the best agency <br>in downtown <span class="dot">.</span></h2>
                        <div class="lower-text">We are committed to providing our customers with exceptional service while offering our employees the best training.</div>
                    </div>
                    <div class="text">
                        <p>Lorem Ipsum is simply dummy text of free available in market the printing and typesetting industry has been the industry's standard dummy text ever.</p>
                    </div>
                    <div class="text clearfix">
                        <ul>
                            <li>Suspe ndisse suscipit sagittis leo.</li>
                            <li>Entum estibulum dignissim posuere.</li>
                            <li>If you are going to use a passage.</li>
                        </ul>
                        <div class="since"><span class="txt">Since <br>2008</span></div>
                    </div>
                    <div class="link-box">
                        <a class="theme-btn btn-style-one" href="about.html">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Discover More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Live Section-->
<section class="live-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Experience us live <span class="dot">.</span></h2>
        </div>
        <div class="main-image-box">
            <div class="image-layer" style="background-image: url(/images/resource/featured-image-3.jpg);"></div>
            <div class="inner clearfix">
                <div class="round-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="round-inner">
                        <div class="vid-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="lightbox-image"><div class="icon"><span class="flaticon-play-button-1"></span><i class="ripple"></i></div></a>
                        </div>
                        <div class="title">
                            <h3>agency that gets <br>excited about</h3>
                        </div>
                        <div class="more-link"><a href="about.html">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--We DO Section-->
<section class="we-do-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>We do more then ever <br>platforms <span class="dot">.</span></h2>
                    </div>
                    <div class="featured-block clearfix">
                        <div class="image"><img src="images/resource/featured-image-4.jpg" alt=""></div>
                        <div class="text">There are many variatns of passages the majority have suffered alteration in some foor randomised words believable.</div>
                    </div>
                    <div class="progress-box">
                        <div class="bar-title">Digital marketing</div>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="70%">
                                <div class="count-box">
                                    <span class="count-text" data-stop="70" data-speed="1500">0</span>%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="faq-box">
                        <ul class="accordion-box clearfix">
                            <!--Block-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active"><span class="count">1.</span> We help to create visual strategies</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><span class="count">2.</span> Motion Graphics & Animations</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block">
                                <div class="acc-btn"><span class="count">3.</span> We help to achieve mutual goals</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            <div class="upper-row clearfix">
                <div class="sec-title">
                    <h2>work showcase <span class="dot">.</span></h2>
                </div>
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All<sup>{{ count($portfolios) }}</sup></li>
                        @foreach ($categories as $category)
                            <li class="filter" data-role="button" data-filter=".cat-{{ $category->slug }}">{{ $category->title }}<sup>{{ count($category->portfolios) }}</sup></li>
                        @endforeach
                    </ul>
                </div>
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
                                <div class="cat"><span>{{ $portfolio->title }}</span></div>
                                <div class="title"><h5>
                                    <a href="{{ route('site.portfolio.show', $portfolio->slug) }}">
                                        {{ strip_tags($portfolio->description) }}
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

<!-- Funfacts Section -->
<section class="facts-section">
    <div class="image-layer" style="background-image: url(/images/background/image-1.jpg);"></div>
    <div class="auto-container">
        <div class="inner-container">

            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="8705">0</span>
                                </div>
                                <div class="counter-title">Projects Completed</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate">
                                    <span class="count-text" data-speed="3000" data-stop="480">0</span>
                                </div>
                                <div class="counter-title">Active clients</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="626">0</span>
                                </div>
                                <div class="counter-title">cups of coffee</div>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="4000" data-stop="9704">0</span>
                                </div>
                                <div class="counter-title">happy clients</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Funfacts Section -->

<!-- Trusted Section -->
<section class="trusted-section">
    <div class="auto-container">
        <div class="outer-container">
            <div class="row clearfix">
                <div class="left-col col-xl-5 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="col-header">
                            <div class="header-inner">
                                <span>We’re Committed To Deliver High Quality Projects .</span>
                            </div>
                        </div>
                        <div class="features">
                            <div class="feature">
                                <div class="count"><span>01</span></div>
                                <h5>TOTAL DESIGN FREEDOM FOR EVERYONE</h5>
                                <div class="sub-text">core features</div>
                            </div>
                            <div class="feature">
                                <div class="count"><span>02</span></div>
                                <h5>BASIC RULES OF RUNNING WEB AGENCY</h5>
                                <div class="sub-text">core features</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-col col-xl-7 col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <h2>We’re trusted by more <br>than 6260 clients<span class="dot">.</span></h2>
                            <div class="lower-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, simply free text by injected humour, or randomised.</div>
                        </div>
                        <div class="featured-block-two clearfix">
                            <div class="image"><img src="images/resource/featured-image-5.jpg" alt=""></div>
                            <div class="text">
                                <ul>
                                    <li> Suspe ndisse sagittis leo.</li>
                                    <li>Entum estibulum is posuere.</li>
                                    <li>If you are going to use passage.</li>
                                    <li>Lorem Ipsum on the tend to repeat.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section no-padd-top">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Meet the expert team<span class="dot">.</span></h2>
        </div>
    </div>
    <div class="carousel-box">
        <div class="team-carousel owl-theme owl-carousel">
            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-1.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Kevin martin</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-2.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Jessica Brown</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-3.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">John Albert</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-4.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Rose ford</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-5.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Mike Hardson</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>
            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-1.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Kevin martin</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-2.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Jessica Brown</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-3.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">John Albert</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-4.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Rose ford</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-5.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Mike Hardson</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-1.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Kevin martin</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-2.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Jessica Brown</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-3.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">John Albert</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-4.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Rose ford</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

            <!--Team-->
            <div class="team-block">
                <div class="inner-box">
                    <div class="image-box">
                        <a href="about.html"><img src="images/resource/team-5.jpg" alt=""></a>
                        <ul class="social-links clearfix">
                            <li><a href="index.html#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="index.html#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h5><a href="index.html#">Mike Hardson</a></h5>
                        <div class="designation">Designer</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Parallax Section -->
<section class="parallax-section">
    <div class="image-layer" style="background-image: url(/images/background/image-2.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <div class="icon-box"><span class="flaticon-app-development"></span></div>
            <h2>Great things in business are never done by one person. <span>They’re done by a team of people.</span></h2>
        </div>
    </div>
</section>
<!-- End Funfacts Section -->

<!--Sponsors Section-->
<section class="sponsors-section">
    <div class="sponsors-outer">
        <!--Sponsors-->
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="sponsors-carousel owl-theme owl-carousel">
                <div class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/clients/1.png" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/clients/2.png" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/clients/3.png" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/clients/4.png" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/clients/5.png" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/clients/1.png" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/clients/2.png" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/clients/3.png" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/clients/4.png" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="index.html#"><img src="images/clients/5.png" alt=""></a></figure></div>
            </div>
        </div>
    </div>
</section>

<!--Agency Section-->
<section class="agency-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>Best design Agency <br>solutions <span class="dot">.</span></h2>
                    </div>

                    <!--Default Tabs-->
                    <div class="default-tabs tabs-box">

                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-1" class="tab-btn active-btn"><span>Our Mission</span></li>
                            <li data-tab="#tab-2" class="tab-btn"><span>Our Vision</span></li>
                            <li data-tab="#tab-3" class="tab-btn"><span>Our History</span></li>
                        </ul>

                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!--Tab-->
                            <div class="tab active-tab" id="tab-1">
                                <div class="content">
                                    <div class="text">There are many variations of passages of avaialable but the majority have in some form, by injected humou or words which don't look even slightly believable. There are many variations of but the majority have suffered.</div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab" id="tab-2">
                                <div class="content">
                                    <div class="text">There are many variations of passages of avaialable but the majority have in some form, by injected humou or words which don't look even slightly believable. There are many variations of but the majority have suffered.</div>
                                </div>
                            </div>

                            <!--Tab-->
                            <div class="tab" id="tab-3">
                                <div class="content">
                                    <div class="text">There are many variations of passages of avaialable but the majority have in some form, by injected humou or words which don't look even slightly believable. There are many variations of but the majority have suffered.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="text">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words which don't look even slightly believable.</div>
                    <div class="featured-block-two clearfix">
                        <div class="image"><img src="images/resource/featured-image-6.jpg" alt=""></div>
                        <div class="text">
                            <ul>
                                <li>Nsectetur cing elit.</li>
                                <li>Suspe ndisse suscipit sagittis leo.</li>
                                <li>Entum estibulum dignissim posuere.</li>
                                <li>If you are going to use a passage.</li>
                                <li>Lorem Ipsum on the tend to repeat.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Latest news & articles<span class="dot">.</span></h2>
        </div>

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
    </div>
</section>

<!-- Call To Section -->
<section class="call-to-section">
    <div class="auto-container">
        <div class="inner clearfix">
            <div class="shape-1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            <div class="shape-2 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            <h2>Let's Get Your Project <br>Started!</h2>
            <div class="link-box">
                <a class="theme-btn btn-style-two" href="about.html">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Contact with us</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection