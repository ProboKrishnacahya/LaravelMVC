@extends('layout.mainlayout')

@section('title', 'Project')

@section('pagetitle', 'My Project')

@section('main_content')
    <a href="/create-project"><button type="button" class="btn btn-primary">Create Project</button></a>
    <br>
    <table class="table table-hover table-dark table-striped table-border border-light mt-4">
        <tr>
            <th>NUM.</th>
            <th>CODE</th>
            <th>PROJECT</th>
            <th>SEMESTER</th>
            <th>DESCRIPTION</th>
            <th>ACTION</th>
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
                <td class="number">{{ $i }}</td>
                <td>{{ $pro['id'] }}</td>
                <td><a href="project/{{ $pro['id'] }}">{{ $pro['project'] }}</a></td>
                <td>{{ $pro['semester'] }}</td>
                <td>{{ $pro['description'] }}</td>
                <td>
                    <a href="/edit-project/{{ $pro['id'] }}"><button type="button" class="btn btn-warning">Edit
                            Project</button></a>
                    <a href="/delete-project/{{ $pro['id'] }}"><button type="button" class="btn btn-danger">Delete
                            Project</button></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
