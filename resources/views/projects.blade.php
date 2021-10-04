<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        @include('layout.navigation')
    </nav>

    <div class="container mt-5">
        <h1 class="fw-bold">{{ $pagetitle }}</h1>
        <table class="table table-striped mt-4">
            <tr>
                <th>NO</th>
                <th>PROJECT</th>
                <th>SEMESTER</th>
                <th>DESCRIPTION</th>
            </tr>
            @php($projects = ['Calculator', 'Accounting', 'Student Report', 'POS Resto', 'Online Store', 'Pet Shop'])
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
