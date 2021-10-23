@extends('layout.mainlayout')

@section('title', 'Project')

@section('pagetitle', 'My Project')

@section('main_content')
    <a href="/create-project">
        <div class="d-md-flex justify-content-md-end">
            <button class="btn btn-success" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>&emsp;Create</button>
        </div>
        <br>
        <table class="table table-hover table-dark table-striped table-border border-light mt-4">
            <tr>
                <th>NUM.</th>
                <th>PROJECT</th>
                <th>DESCRIPTION</th>
                <th>SEMESTER</th>
                <th>MATA KULIAH</th>
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
                    <td><a href="project/{{ $pro['id'] }}">{{ $pro['project'] }}</a></td>
                    <td>{{ $pro['description'] }}</td>
                    <td>{{ $pro['semester'] }}</td>
                    <td>{{ $pro['mata_kuliah'] }}</td>
                    <td>
                        <div class="d-flex gap-2 justify-content-center">
                            <a href="/edit-project/{{ $pro['id'] }}">
                                <button type="button" class="btn btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>&emsp;Edit
                                </button>
                            </a>
                            <a href="/delete-project/{{ $pro['id'] }}" onclick = "return confirm('Are you sure you want to delete the data?\n\nThis action cannot be undone!');">
                                <button type="button" class="btn btn-outline-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>&emsp;Delete
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection

    @section('footer')
