<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //menampilkan list Courses berupa table dari course.blade.php
    public function index()
    {
        $course = Course::all();
        return view('course', compact('course'), [
            'title' => 'Course'
        ]);
        // [
        //     'title' => 'Course',
        //     'pagetitle' => 'My Course',
        //     'courses' => Course::allData()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    //menampilkan detail Courses sesuai Kode Mata Kuliah yang diklik berupa card dari showcourse.blade.php
    public function show($course_code)
    {

        // ->orderBy('course_code')
        // if ($course_code == $course['course_code']) {
        //     $getCourse['course_code'] = $course['course_code'];
        //     $getCourse['course_name'] = $course['course_name'];
        //     $getCourse['lecturer'] = $course['lecturer'];
        //     $getCourse['number_sks'] = $course['number_sks'];
        //     $getCourse['description'] = $course['description'];
        // }

        return view('showcourse', [
            "title"=> "Course",
            "course"=>Course::where('course_code',$course_code)
            ->first()
        ]);
        // [
        //     'title' => 'Course',
        //     'pagetitle'=>'Detail Course',
        //     'course' => Course::dataWithCode($code)
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
