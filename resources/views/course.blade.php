@extends('layout.mainlayout')

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
            @php($i = $loop->index)
            @php($i++)
            {{-- @if ($loop->even)
                @php($semester = 'EVEN')
            @else
                @php($semester = 'ODD')
            @endif --}}
            <tr>
                <td>
                    {{ $i }}
                </td>
                <td>
                    {{ $matkul['code'] }}
                </td>
                <td>
                    <a href="course/{{ $matkul['code'] }}">{{ $matkul['name'] }}</a>
                </td>
                {{-- <td>{{ $semester }}</td> --}}
                <td>{{ $matkul['lecturer'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
