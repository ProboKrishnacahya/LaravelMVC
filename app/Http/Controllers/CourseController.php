<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $courses = Course::all();
        return view('course', compact('courses'), [
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
        DB::table('courses')->insert([
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'lecturer' => $request->lecturer,
            'number_sks' => $request->number_sks,
            'description' => $request->description,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return view(
            'course',
            [
                'title' => 'Course',
                'courses' => Course::all()
            ]
        );
    }

    public function goToForm()
    {
        return view(
            'createCourse',
            [
                'title' => 'Course'
            ]
        );
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
        //}

        $course = Course::where('course_code', $course_code)
            ->orderBy('course')
            ->get();
        return view(
            'showcourse',
            compact('courses'),
            [
                'title' => 'Course'
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        DB::table('course')
            ->where('course_code', $request->course_code)
            ->update([
                'course_code' => $request->course_code,
                'course_name' => $request->course_name,
                'lecturer' => $request->lecturer,
                'number_sks' => $request->number_sks,
                'description' => $request->description
            ]);

        return view(
            'course',
            [
                'title' => 'Course',
                'courses' => Course::all()
            ]
        );
    }

    public function goToFormEdit($course_code)
    {
        $course = Course::where('course_code', $course_code)
            ->orderBy('course')
            ->get();
        return view(
            'editCourse',
            compact('courses'),
            [
                'title' => 'Course'
            ]
        );
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
    public function destroy($course_code)
    {
        DB::table('courses')
            ->where('course_code', $course_code)
            ->delete();

        return view(
            'course',
            [
                'title' => 'Course',
                'courses' => Course::all()
            ]
        );
    }
}
