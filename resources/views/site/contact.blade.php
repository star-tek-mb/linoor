@extends('site.layouts.app')

@section('title') Contact @endsection

@section('content')

<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(/images/background/image-7.jpg);"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Contact</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('site.home') }}">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="form-box">
            <div class="sec-title">
                <h2>Write Us a Message<span class="dot">.</span></h2>
            </div>
            <div class="default-form">
                <form method="post" action="{{ route('site.contact.post') }}" id="contact-form">
                    @csrf
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

@endsection