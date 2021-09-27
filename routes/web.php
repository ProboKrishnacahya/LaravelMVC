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

Route::get('/', function () {
    return view('home', ['title' => 'Home', 'pagetitle' => 'Welcome HOME']);
});

Route::get('/projects', function () {
    return view('projects', ['title' => 'Projects', 'pagetitle' => 'My Projects']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'pagetitle' => 'My Contact']);
});
