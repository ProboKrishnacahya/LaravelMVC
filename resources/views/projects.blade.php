<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="mydesign/mystyle.css" />
    <title>{{ $title }}</title>
</head>

<body>
    @include('layout.navigation')

    <h1>{{ $pagetitle }}</h1>
    <table>
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
</body>

</html>
