<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [Controller::class, 'home']);

Route::get('/project', [ProjectController::class, 'index']);

Route::get('/project/{code}', [ProjectController::class, 'show']);

Route::get('/contact', [Controller::class, 'contact']);
