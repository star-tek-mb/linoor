@extends('site.layouts.app')

@section('title') FAQs - Pages @endsection

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>FAQs</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('site.home') }}">Home</a></li>
                        <li><a href="{{ route('site.pages.team') }}">Pages</a></li>
                        <li class="active">FAQs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Testimonials Section-->
<section class="faqs-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="faq-block col-lg-6 col-md-12 col-sm-12">
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

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn"><span class="count">4.</span> What happend to my design code</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn"><span class="count">5.</span> what will be the cost of code</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="faq-block col-lg-6 col-md-12 col-sm-12">
                <ul class="accordion-box clearfix">
                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn"><span class="count">1.</span> We help to create visual strategies</div>
                        <div class="acc-content">
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

                    <!--Block-->
                    <li class="accordion block active-block">
                        <div class="acc-btn active"><span class="count">4.</span> What happend to my design code</div>
                        <div class="acc-content current">
                            <div class="content">
                                <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn"><span class="count">5.</span> what will be the cost of code</div>
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
</section>

<!--Get Quote Section-->
<section class="get-quote-three">
    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Still stuck ask directly<span class="dot">.</span></h2>
        </div>
        <div class="form-box">
            <div class="default-form">
                <form method="post" action="{{ route('site.contact.post') }}" id="contact-form">
                    <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="username" value="" placeholder="Your Name" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="email" name="email" value="" placeholder="Email Address" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="phone" value="" placeholder="Phone Number" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="subject" value="" placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="field-inner">
                                <textarea name="message" placeholder="Write Message" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <button class="theme-btn btn-style-one">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Send message</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Call To Section -->
<section class="call-to-section-two alternate">
    <div class="auto-container">
        <div class="inner clearfix">
            <h2>We’re Ready to Bring Bigger <br>& Stronger Projects</h2>
            <div class="link-box">
                <a class="theme-btn btn-style-two" href="{{ route('site.contact') }}">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Contact with us</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection