@extends('layout.courselayout')

@section('title', 'Course')

@section('pagetitle', 'My Course')

@section('main_content')
    <table class="table table-hover table-dark table-striped table-border border-light mt-4">
        <tr>
            <th>NUM.</th>
            <th>COURSE CODE</th>
            <th>COURSE NAME</th>
            <th>LECTURER</th>
            <th>SKS</th>
            <th>DESCRIPTION</th>
        </tr>
        @foreach ($course as $matkul)
            {{-- menampilkan nomor kolom secara berurutan melalui $loop->index --}}
            @php($i = $loop->index)
            @php($i++)
            <tr>
                <td>{{ $i }}</td>
                {{-- mengarahkan hyperlink ke detail Courses sesuai Kode Mata Kuliah yang diklik --}}
                <td><a href="course/{{ $matkul['course_code'] }}">{{ $matkul['course_code'] }}</a></td>
                <td>{{ $matkul['course_name'] }}</td>
                <td>{{ $matkul['lecturer'] }}</td>
                <td>{{ $matkul['lecturer'] }}</td>
                <td>{{ $matkul['lecturer'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
