<?php

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
    return view('portfolio/homepage');
});


Route::get('/me', function () {
    return view('portfolio/about_me');
});

Route::get('/projects', function () {
    return view('portfolio/projects');
});

Route::get('/contact', function () {
    return view('portfolio/contact');
});
