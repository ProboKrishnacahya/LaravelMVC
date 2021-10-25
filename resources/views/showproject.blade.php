@extends('layout.mainlayout')

@section('title', 'Project')

@section('pagetitle', 'Detail Project')

@section('main_content')
    <div class="card my-5 p-5 bg-primary text-white">
        <h1>{{ $projects['project'] }}</h1>
        <hr class="mb-5">
        <p>Description: {{ $projects['description'] }}</p>
        <p>Semester: {{ $projects['semester'] }}</p>
        <p>Mata Kuliah: {{ $projects['mata_kuliah'] }}</p>
    </div>
@endsection

@section('footer')
