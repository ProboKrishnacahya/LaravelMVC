@extends('layout.courselayout')

@section('title', 'Project')

@section('pagetitle', 'Edit Project')

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/project/edit" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="project">Project Name:</label>
                        <input type="input" class="form-control" id="project" name="project"
                            value="{{ $project[0]['project'] }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="input" class="form-control" id="description" name="description"
                            value="{{ $project[0]['description'] }}">
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester:</label>
                        <input type="input" class="form-control" id="semester" name="semester"
                            value="{{ $project[0]['semester'] }}">
                    </div>
                    <div class="form-group">
                        <label for="mata_kuliah">Mata Kuliah:</label>
                        <input type="input" class="form-control" id="mata_kuliah" name="mata_kuliah"
                            value="{{ $project[0]['mata_kuliah'] }}">
                        <input type="hidden" class="form-control" id="id" name="id"
                            value="{{ $project[0]['id'] }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
