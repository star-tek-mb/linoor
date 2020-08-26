<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function() {
    Auth::routes(['register' => false]);
});

Route::name('admin.')->prefix('admin')->namespace('Admin')->middleware('auth')->group(function() {
    Route::redirect('/', '/admin/dashboard');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::name('portfolio.')->prefix('portfolio')->group(function() {
        Route::get('/', 'PortfolioController@index')->name('index');
        Route::get('/create', 'PortfolioController@create')->name('create');
        Route::post('/store', 'PortfolioController@store')->name('store');
        Route::get('/{id}/edit', 'PortfolioController@edit')->name('edit');
        Route::put('/{id}', 'PortfolioController@update')->name('update');
        Route::delete('/{id}', 'PortfolioController@destroy')->name('destroy');
        Route::post('/upload/{id}', 'PortfolioController@uploadImage')->name('upload');
    });
    
    Route::name('category.')->prefix('category')->group(function() {
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/store', 'CategoryController@store')->name('store');
        Route::get('/{id}/edit', 'CategoryController@edit')->name('edit');
        Route::put('/{id}', 'CategoryController@update')->name('update');
        Route::delete('/{id}', 'CategoryController@destroy')->name('destroy');
    });

    Route::name('blog.')->prefix('blog')->group(function() {
        Route::get('/', 'BlogController@index')->name('index');
        Route::get('/create', 'BlogController@create')->name('create');
        Route::post('/store', 'BlogController@store')->name('store');
        Route::get('/{id}/edit', 'BlogController@edit')->name('edit');
        Route::put('/{id}', 'BlogController@update')->name('update');
        Route::delete('/{id}', 'BlogController@destroy')->name('destroy');
        Route::post('/upload/{id}', 'BlogController@uploadImage')->name('upload');
    });
});

Route::name('site.')->namespace('Site')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::name('portfolio.')->prefix('portfolio')->group(function() {
        Route::get('/', 'PortfolioController@index')->name('index');
        Route::get('/{slug}', 'PortfolioController@show')->name('show');
    });

    Route::name('blog.')->prefix('blog')->group(function() {
        Route::get('/', 'BlogController@index')->name('index');
        Route::get('/all', 'BlogController@all')->name('all');
        Route::get('/{slug}', 'BlogController@show')->name('show');
    });

    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::post('/contact/post', 'ContactController@post')->name('contact.post');

    Route::get('/about', 'SiteController@about')->name('about');
    Route::get('/services', 'SiteController@services')->name('services');
    Route::get('/services/webdevelopment', 'SiteController@servicesWebDevelopment')->name('services.webdevelopment');
    Route::get('/services/graphicdesigning', 'SiteController@servicesGraphicDesigning')->name('services.graphicdesigning');
    Route::get('/services/digitalmarketing', 'SiteController@servicesDigitalMarketing')->name('services.digitalmarketing');
    Route::get('/services/seo', 'SiteController@servicesSEO')->name('services.seo');
    Route::get('/services/appdevelopment', 'SiteController@servicesAppDevelopment')->name('services.appdevelopment');
    Route::get('/services/uidesigning', 'SiteController@servicesUiDesigning')->name('services.uidesigning');

    Route::get('/pages/team', 'SiteController@pagesTeam')->name('pages.team');
    Route::get('/pages/notfound', 'SiteController@pagesNotFound')->name('pages.notfound');
    Route::get('/pages/faqs', 'SiteController@pagesFaqs')->name('pages.faqs');
    Route::get('/pages/testimonials', 'SiteController@pagesTestimonials')->name('pages.testimonials');
});
