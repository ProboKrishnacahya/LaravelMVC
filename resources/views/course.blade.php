@extends('layout.courselayout')

@section('title', 'Course')

@section('pagetitle', 'My Course')

@section('main_content')
    <table class="table table-hover table-dark table-striped table-border border-light mt-4">
        <tr>
            <th>NUM.</th>
            <th>CODE</th>
            <th>COURSE NAME</th>
            <th>LECTURER</th>
        </tr>
        @foreach ($courses as $matkul)
            {{-- menampilkan nomor kolom secara berurutan melalui $loop->index --}}
            @php($i = $loop->index)
            @php($i++)
            <tr>
                <td>{{ $i }}</td>
                {{-- mengarahkan hyperlink ke detail Courses sesuai Kode Mata Kuliah yang diklik --}}
                <td><a href="course/{{ $matkul['code'] }}">{{ $matkul['code'] }}</a></td>
                <td>{{ $matkul['name'] }}</td>
                <td>{{ $matkul['lecturer'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
