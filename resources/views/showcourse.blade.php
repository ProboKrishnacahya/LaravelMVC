@extends('layout.courselayout')

@section('title', 'Course')

@section('pagetitle', 'Detail Course')

@section('main_content')
    <div class="card mt-4 p-5 bg-primary text-white">
        <h1>{{ $course['course_code'] }}</h1>
        <hr class="mb-5">
        <p>Course Name: {{ $course['course_name'] }}</p>
        <p>Lecturer: {{ $course['lecturer'] }}</p>
        <p>Credits: {{ $course['number_sks'] }}</p>
        <p>Description: {{ $course['description'] }}</p>
    </div>
@endsection

@section('footer')
