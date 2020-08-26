<!-- Main Header -->
<header class="main-header header-style-one">

<!-- Header Upper -->
<div class="header-upper">
    <div class="inner-container clearfix">
        <!--Logo-->
        <div class="logo-box">
            <div class="logo"><a href="{{ route('site.home') }}" title="Linoor - DIgital Agency HTML Template"><img src="/images/logo.png" alt="Linoor - DIgital Agency HTML Template" title="Linoor - DIgital Agency HTML Template"></a></div>
        </div>
        <div class="nav-outer clearfix">
            <!--Mobile Navigation Toggler-->
             <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span class="txt">Menu</span></div>

            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                    <ul class="navigation clearfix">
                        <li class="{{ Request::is('/') ? 'current' : null }}"><a href="{{ route('site.home') }}">Home</a></li>
                        <li class="{{ Request::is('about') ? 'current' : null }}"><a href="{{ route('site.about') }}">About Us</a></li>
                        <li class="{{ Request::is('pages/*') ? 'current' : null }} dropdown"><a href="{{ route('site.pages.team') }}">Pages</a>
                            <ul>
                                <li><a href="{{ route('site.pages.team') }}">Our Team</a></li>
                                <li><a href="{{ route('site.pages.testimonials') }}">Testimonials</a></li>
                                <li><a href="{{ route('site.pages.faqs') }}">FAQs</a></li>
                                <li><a href="{{ route('site.pages.notfound') }}">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('services', 'services/*') ? 'current' : null }} dropdown"><a href="{{ route('site.services') }}">Services</a>
                            <ul>
                                <li><a href="{{ route('site.services') }}">All Services</a></li>
                                <li><a href="{{ route('site.services.webdevelopment') }}">Website Development</a></li>
                                <li><a href="{{ route('site.services.graphicdesigning') }}">Graphic Designing</a></li>
                                <li><a href="{{ route('site.services.digitalmarketing') }}">Digital Marketing</a></li>
                                <li><a href="{{ route('site.services.seo') }}">SEO & Content Writting</a></li>
                                <li><a href="{{ route('site.services.appdevelopment') }}">App Development</a></li>
                                <li><a href="{{ route('site.services.uidesigning') }}">UI/UX Designing</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('portfolio', 'portfolio/*') ? 'current' : null }}"><a href="{{ route('site.portfolio.index') }}">Portfolio</a></li>
                        <li class="{{ Request::is('blog', 'blog/*') ? 'current' : null }}"><a href="{{ route('site.blog.index') }}">Blog</a></li>
                        <li class="{{ Request::is('contact') ? 'current' : null }}"><a href="{{ route('site.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="other-links clearfix">
            <!--Search Btn-->
            <div class="search-btn">
                <button type="button" class="theme-btn search-toggler"><span class="flaticon-loupe"></span></button>
            </div>
            <div class="link-box">
                <div class="call-us">
                    <a class="link" href="tel:6668880000">
                        <span class="icon"></span>
                        <span class="sub-text">Call Anytime</span>
                        <span class="number">666 888 0000</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<!--End Header Upper-->

</header>
<!-- End Main Header -->

<!--Mobile Menu-->
<div class="side-menu__block">


    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">
        <div class="side-menu__top justify-content-end">

            <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="/images/icons/close-1-1.png" alt=""></a>
        </div><!-- /.side-menu__top -->


        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>
        <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
        <div class="side-menu__content">
            <p>Linoor is a premium Template for Digital Agencies, Start Ups, Small Business and a wide range of other agencies.</p>
            <p><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a> <br> <a href="tel:888-999-0000">888 999 0000</a></p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div><!-- /.side-menu__content -->
    </div><!-- /.side-menu__block-inner -->
</div><!-- /.side-menu__block -->

<!--Search Popup-->
<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- /.search-popup__inner -->
</div><!-- /.search-popup -->