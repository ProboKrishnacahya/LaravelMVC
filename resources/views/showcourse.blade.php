@extends('layout.mainlayout')

@section('title', 'Course')

@section('pagetitle', 'Detail Course')

@section('main_content')
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>{{ $course['code'] }}</h1>
        <hr class="mb-5">
        <p>Course Name: {{ $course['name'] }}</p>
        <p>Lecturer: {{ $course['lecturer'] }}</p>
        <p>Credits: {{ $course['credits'] }}</p>
        <p>Description: {{ $course['description'] }}</p>
    </div>
@endsection

@section('footer')
