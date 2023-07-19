<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">    
    <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="{{asset('https://kit.fontawesome.com/e87c1d29bf.js')}}" crossorigin="anonymous"></script>
    <title>@yield('title-block')</title>
</head>
<body class="@yield('body-class')">
    @include('inc.navbar')
    @yield('content')
    @include('inc.footer')
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    @stack('js-block')
</body>
</html>  