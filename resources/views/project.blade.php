@extends('layout.mainlayout')

@section('title', 'Project')

@section('pagetitle', 'My Project')

@section('main_content')
    <table class="table table-hover table-dark table-striped table-border border-light mt-4">
        <tr>
            <th>NO</th>
            <th>PROJECT</th>
            <th>SEMESTER</th>
            <th>DESCRIPTION</th>
        </tr>
        {{-- @php($projects = ['Calculator', 'Accounting', 'Student Report', 'POS Resto', 'Online Store', 'Pet Shop']) --}}
        @foreach ($projects as $pro)
            @php($i = $loop->index)
            @php($i++)
            @if ($loop->even)
                @php($semester = 'EVEN')
            @else
                @php($semester = 'ODD')
            @endif
            <tr>
                <td>
                    {{ $i }}
                </td>
                <td>{{ $pro }}</td>
                <td>{{ $semester }}</td>
                <td>
                    @if ($loop->first)
                        My Very FIRST Project
                    @elseif ($loop->last)
                        My LAST Project
                    @else
                        Lorem ipsum dolor sit amet.
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    @endsection

    @section('footer')
