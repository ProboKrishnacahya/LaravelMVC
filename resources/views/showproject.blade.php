@extends('layout.mainlayout')

@section('title', 'Project')

@section('pagetitle', 'Detail Project')

@section('main_content')
    <div class="card mt-4 p-5 bg-primary text-white">
        <h1>{{ $project[0]['project'] }}</h1>
        <hr class="mb-5">
        <p>Description: {{ $project[0]['description'] }}</p>
        <p>Semester: {{ $project[0]['semester'] }}</p>
        <p>Mata Kuliah: {{ $project[0]['mata_kuliah'] }}</p>
    </div>
@endsection

@section('footer')
