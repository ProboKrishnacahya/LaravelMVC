@extends('layout.courselayout')

@section('title', 'Course')

@section('pagetitle', 'Create Course')

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col">

                <form action="{{ route('courses.store') }}" method="post">
                    @csrf

                    {{-- Menampilkan Alert jika Project Name < 5 / > 50 karakter --}}
                    @if ($errors->any())
                        <div class="alert alert-info mt-3 justify-content-between" role="alert">
                            @foreach ($errors->all() as $error)
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                    </symbol>
                                </svg>
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif

                    <div class="form-group py-2">
                        <label for="course_code" class="mb-2">Course Code:</label>
                        <input type="text" class="form-control bg-black text-white" id="course_code" name="course_code" required>
                    </div>
                    <div class="form-group py-2">
                        <label for="course_name" class="mb-2">Course Name:</label>
                        <input type="text" class="form-control bg-black text-white" id="course_name" name="course_name" required>
                    </div>
                    <div class="form-group py-2">
                        <label for="lecturer" class="mb-2">Lecturer:</label>
                        <input type="text" class="form-control bg-black text-white" id="lecturer" name="lecturer" required>
                    </div>
                    <div class="form-group py-2">
                        <label for="number_sks" class="mb-2">SKS:</label>
                        <input type="number" class="form-control bg-black text-white" id="number_sks" name="number_sks" required>
                    </div>
                    <div class="form-group py-2">
                        <label for="description" class="mb-2">Description:</label>
                        <textarea class="form-control bg-black text-white" id="description" name="description" required>
                        </textarea>
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
