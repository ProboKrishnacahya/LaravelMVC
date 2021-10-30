@extends('layout.courselayout')

@section('title', 'Course')

@section('pagetitle', 'Detail Course')

@section('main_content')
    <div class="card mt-4 p-5 bg-primary text-white">
        <h1>{{ $courses->course_code }}</h1>
        <hr class="mb-5">
        <p>Course Name: {{ $courses->course_name }}</p>
        <p>Lecturer: {{ $courses->lecturer }}</p>
        <p>Credits: {{ $courses->number_sks }}</p>
        <p>Description: {{ $courses->description }}</p>
    </div>
@endsection

@section('footer')
