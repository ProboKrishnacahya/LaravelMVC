@extends('layout.courselayout')

@section('title', 'Project')

@section('pagetitle', 'Create Project')

@section('main_content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="/project" method="post">
                @csrf
                <div class="form-group">
                    <label for="project">Project Name:</label>
                    <input type="text" class="form-control" id="project" name="project">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="semester">Semester:</label>
                    <input type="number" class="form-control" id="semester" name="semester">
                </div>
                <div class="form-group">
                    <label for="mata_kuliah">Mata Kuliah:</label>
                    <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
