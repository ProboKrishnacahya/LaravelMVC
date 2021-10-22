@extends('layout.courselayout')

@section('title', 'Course')

@section('pagetitle', 'Detail Course')

@section('main_content')
    <div class="card mt-4 p-5 bg-primary text-white">
        <h1>{{ $course[0]['course_code'] }}</h1>
        <hr class="mb-5">
        <p>Course Name: {{ $course[0]['course_name'] }}</p>
        <p>Lecturer: {{ $course[0]['lecturer'] }}</p>
        <p>Credits: {{ $course[0]['number_sks'] }}</p>
        <p>Description: {{ $course[0]['description'] }}</p>
    </div>
@endsection

@section('footer')
