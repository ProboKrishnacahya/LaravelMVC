<?php

use App\Models\Project;
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
    return view('home', ['title' => 'Home', 'pagetitle' => 'Welcome Home']);
});

Route::get('/project', function () {
    return view('project', ['title' => 'My Project', 'projects' => Project::allData()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'pagetitle' => 'My Contact']);
});
