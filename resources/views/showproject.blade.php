@extends('layout.mainlayout')

@section('title', 'Project')

@section('pagetitle', 'Detail Project')

@section('main_content')
    <div class="card mt-4 p-5 bg-primary text-white">
        <h1>{{ $project['title'] }}</h1>
        <hr class="mb-5">
        <p>Course: {{ $project['course'] }}</p>
        <p>Code: {{ $project['code'] }}</p>
    </div>
@endsection

@section('footer')
