@extends('layout.mainlayout')

@section('title', 'Project')

@section('pagetitle', 'Edit Project')

@section('main_content')
    <div class="container">

        {{-- Untuk kembali ke halaman sebelumnya --}}
        <a href="{{ URL::previous() }}" class="btn btn-outline-secondary my-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg>
            &nbsp;Go Back
        </a>

        <div class="row">
            <div class="col">
                <form action="{{ route('projects.update', $projects->id) }}" method="post">
                    @csrf

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

                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group py-2">
                        <label for="project" class="mb-2">Project Name:</label>
                        <input type="text" class="form-control bg-black text-white" name="project"
                            value="{{ $projects->project }}" required> {{-- value nya $nama_table->nama_kolom sesuai yang di database --}}
                    </div>
                    <div class="form-group py-2">
                        <label for="description" class="mb-2">Description:</label>
                        <textarea class="form-control bg-black text-white" id="description" name="description" value="{{ $projects->description }}"  required>
                        </textarea>
                    </div>
                    <div class="form-group py-2">
                        <label for="semester" class="mb-2">Semester:</label>
                        <input class="form-control bg-black text-white" list="semester" name="semester"
                            placeholder="{{ $projects->semester }}" required>
                        <datalist id="semester">
                            <option value="Odd"></option>
                            <option value="Even"></option>
                        </datalist>
                    </div>
                    <div class="form-group py-2">
                        <label for="mata_kuliah" class="mb-2">Mata Kuliah:</label>
                        <input type="text" class="form-control bg-black text-white" id="mata_kuliah" name="mata_kuliah"
                            value="{{ $projects->mata_kuliah }}" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cursor-fill" viewBox="0 0 16 16">
                            <path
                                d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                        </svg>&nbsp;Submit
                    </button>

                </form>
            </div>
        </div>
    </div>

@endsection
