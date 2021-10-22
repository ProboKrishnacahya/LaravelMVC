@extends('layout.courselayout')

@section('title', 'Course')

@section('pagetitle', 'Edit Course')

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/course/edit" method="post">
                    @csrf
                    <div class="form-group py-3">
                        <label for="course_code">Course Code:</label>
                        <input type="text" class="form-control bg-black" id="course_code" name="course_code" value="{{ $project[0]['course_code'] }}">
                    </div>
                    <div class="form-group py-3">
                        <label for="course_name">Course Name:</label>
                        <input type="text" class="form-control bg-black" id="course_name" name="course_name" value="{{ $project[0]['course_name'] }}">
                    </div>
                    <div class="form-group py-3">
                        <label for="lecturer">Lecturer:</label>
                        <input type="text" class="form-control bg-black" id="lecturer" name="lecturer" value="{{ $project[0]['lecturer'] }}">
                    </div>
                    <div class="form-group py-3">
                        <label for="number_sks">SKS:</label>
                        <input type="number" class="form-control bg-black" id="number_sks" name="number_sks" value="{{ $project[0]['number_sks'] }}">
                    </div>
                    <div class="form-group py-3">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control bg-black" id="description" name="description" value="{{ $project[0]['description'] }}">
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
