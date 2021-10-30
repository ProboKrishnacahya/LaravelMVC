<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class CourseResourceController extends Controller
{
    //* Read all data pada table di halaman /course
    public function index()
    {
        //Ambil semua data yang ada di table Courses pada database
        $courses = Course::all();

        return view(
            'course',
            [
                "title" => "Course",
                "pagetitle" => "My Course"
            ],
            compact('courses')
        );
    }

    //* Memanggil View createCourse.blade.php
    public function create()
    {
        return view('createCourse', ['title' => 'Create Course']);
    }

    //* Create new data hasil submit dari createCourse.blade.php
    public function store(Request $request)
    {
        Course::create([
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'lecturer' => $request->lecturer,
            'number_sks' => $request->number_sks,
            'description' => $request->description
        ]);
        return redirect(route('courses.index')); //? seperti <a href=""></a>
    }

    //* Menampilkan detail data sesuai Course Name
    public function show($code)
    {
        $courses = Course::where('course_code', $code)->first();
        $title = "My Course";
        return view('showcourse', compact('courses', 'title'));
    }

    public function edit($code)
    {
        $courses = Course::where('course_code', $code)->first();
        $title = "My Course";
        return view('editCourse', compact('courses', 'title'));
    }

    //* Update existing data pada editCourse.blade.php
    public function update(Request $request, $code)
    {
        $courses = Course::where('course_code', $code);
        $courses->update([
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'lecturer' => $request->lecturer,
            'number_sks' => $request->number_sks,
            'description' => $request->description,
        ]);
        return redirect(route('courses.index'));
    }

    //* Delete selected data pada database
    public function destroy($code)
    {
        $courses = Course::where('course_code', $code);
        $courses->delete();
        return redirect(route('courses.index'));
    }
}
