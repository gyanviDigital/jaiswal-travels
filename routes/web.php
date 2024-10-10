<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('services', function () {
    return view('service');
});

Route::get('tour-packages', function () {
    return view('tour-packages');
});


Route::get('contact', function () {
    return view('contact');
});
//pages
Route::get('blog-gride', function () {
    return view('pages.blog-gride');
});

Route::get('blog-details', function () {
    return view('pages.single');
});

Route::get('destination', function () {
    return view('pages.destination');
});

Route::get('travel-guide', function () {
    return view('pages.travel-guide');
});

Route::get('testimonial', function () {
    return view('pages.testimonial');
});
Route::post('enquery-done', function (Request $request) {
    return view('home');
});
