<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProjectController;

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

//Route::get('/URL page', [class, 'function']);
//* Home
Route::get('/', [Controller::class, 'home']);

//* Project
Route::get('/project', [ProjectController::class, 'index']);

//* Detail Project
Route::get('/project/{code}', [ProjectController::class, 'show']);

//* Create Project
Route::post('/project', [ProjectController::class, 'store']);

//* Create Project (Form)
Route::get('/create-project', [ProjectController::class, 'goToForm']);

//* Edit Project (Form)
Route::get('/edit-project/{id}', [ProjectController::class, 'goToFormEdit']);

//* Edit Project
Route::post('/project/edit', [ProjectController::class, 'edit']);

//* Delete Project
Route::get('/delete-project/{id}', [ProjectController::class, 'destroy']);

//* Contact
Route::get('/contact', [Controller::class, 'contact']);

//* Course
Route::get('/course', [CourseController::class, 'index']);

//* Detail Course
Route::get('/course/{course_code}', [CourseController::class, 'show']);

//* Create Course
Route::post('/course', [CourseController::class, 'store']);

//* Create Course (Form)
Route::get('/create-course', [CourseController::class, 'goToForm']);

//* Edit Course (Form)
Route::get('/edit-course/{course_code}', [CourseController::class, 'goToFormEdit']);

//* Edit Course
Route::post('/course/edit', [CourseController::class, 'edit']);

//* Delete Course
Route::get('/delete-course/{course_code}', [CourseController::class, 'destroy']);
