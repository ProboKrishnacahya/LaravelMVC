@extends('layout.courselayout')

@section('title', 'Project')

@section('pagetitle', 'Edit Project')

@section('main_content')
    <div class="container">
        <a href="{{ URL::previous() }}" class="btn btn-danger"><i class="fas fa-arrow-left"></i>Go Back</a>
        <div class="row">
            <div class="col">
                <form action="/project/edit" method="post">
                    @csrf
                    <div class="form-group py-3">
                        <label for="code">Code:</label>
                        <input type="text" class="form-control bg-black" id="code" name="code" required>
                    </div>
                    <div class="form-group py-3">
                        <label for="project">Project Name:</label>
                        <input type="input" class="form-control" id="project" name="project"
                            value="{{ $project[0]['project'] }}">
                    </div>
                    <div class="form-group py-3">
                        <label for="description">Description:</label>
                        <input type="input" class="form-control" id="description" name="description"
                            value="{{ $project[0]['description'] }}">
                    </div>
                    <div class="form-group py-3">
                        <label for="semester">Semester:</label>
                        <input type="input" class="form-control" id="semester" name="semester"
                            value="{{ $project[0]['semester'] }}">
                    </div>
                    <div class="form-group py-3">
                        <label for="mata_kuliah">Mata Kuliah:</label>
                        <input type="input" class="form-control" id="mata_kuliah" name="mata_kuliah"
                            value="{{ $project[0]['mata_kuliah'] }}">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $project[0]['id'] }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cursor-fill" viewBox="0 0 16 16">
                            <path
                                d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                        </svg>&emsp;Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
