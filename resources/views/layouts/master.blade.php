<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('images/logo.png')}}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
    @yield('styles')
    <title>School Manager</title>
</head>
<body>
    @yield('body')

    @yield('scripts')
</body>
</html>