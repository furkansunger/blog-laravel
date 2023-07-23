<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') | Admin Panel </title>
</head>
<body>
    
    @include('admin.common._header');

    @section('content')
    @show
    
    @include('admin.common._footer');
    @include('admin.common._scripts');
    {{$slot}}
    @section('bottom')
    @show
</body>
</html>