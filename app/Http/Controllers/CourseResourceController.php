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
        $active_welcome = "";
        $active_courses = "active";
        $active_courses = "";

        //Ambil semua data yang ada di table Courses pada database
        $courses = Course::all();

        return view(
            'course',
            [
                "title" => "Course",
                "pagetitle" => "My Course"
            ],
            compact('active_welcome', 'active_courses', 'active_courses', 'courses')
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
        //? Validator untuk input jumlah karakter pada Course Name
        $this->validate($request, [
            'course' => 'required|min:5|max:50',
        ]);

        //? Mengambil 3 karakter yang paling depan dari Course Name + diubah dalam bentuk uppercase untuk menjadi Code nya
        $code = Str::upper(Str::substr($request->course, 0, 3));

        Course::create([
            'code' => $code,
            'course' => $request->course,
            'description' => $request->description,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah
        ]);
        return redirect(route('course.index')); //? seperti <a href=""></a>
    }

    //* Menampilkan detail data sesuai Course Name
    public function show($id)
    {
        $courses = Course::where('code', $id)->first();
        $title = "My Course";
        return view('showcourse', compact('courses', 'title'));
    }

    public function edit($code)
    {
        $courses = Course::findOrFail($code); //? findOrFail mencari id di table Course yang sama dengan $code, maka semua data akan diambil & data disimpan di $courses
        $title = "My Course";
        return view('editCourse', compact('courses', 'title'));
    }

    //* Update existing data pada editCourse.blade.php
    public function update(Request $request, $id)
    {
        $code = Str::upper(Str::substr($request->course, 0, 3));
        $courses = Course::findOrFail($id);
        $courses->update([
            'code' => $code,
            'course' => $request->course,
            'description' => $request->description,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah
        ]);
        return redirect(route('course.index'));
    }

    //* Delete selected data pada database
    public function destroy($id)
    {
        $courses = Course::findOrFail($id);
        $courses->delete();
        return redirect(route('course.index'));
    }
}
