<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function about()
    {
        return view('site.about');
    }

    public function services() {
        return view('site.services');
    }

    public function servicesWebDevelopment() {
        return view('site.services.webdevelopment');
    }

    public function servicesGraphicDesigning() {
        return view('site.services.graphicdesigning');
    }

    public function servicesDigitalMarketing() {
        return view('site.services.digitalmarketing');
    }

    public function servicesSEO() {
        return view('site.services.seo');
    }

    public function servicesAppDevelopment() {
        return view('site.services.appdevelopment');
    }

    public function servicesUiDesigning() {
        return view('site.services.uidesigning');
    }

    public function pagesTeam() {
        return view('site.pages.team');
    }

    public function pagesNotFound() {
        return view('site.pages.notfound');
    }

    public function pagesFaqs() {
        return view('site.pages.faqs');
    }

    public function pagesTestimonials() {
        return view('site.pages.testimonials');
    }
}