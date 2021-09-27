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
    <p>Welcome to my pages.</p>
</body>

</html>
