<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Andrew Barker Portfolio! | {{$title}}    </title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{url('app.css')}}">

    <script src="{{url('app.js')}}"></script>
    
</head>
<body>

<header class="w3-padding">

    <h1 class="w3-text-red">Andrew Barker Portfolio!</h1>

</header>

<hr>

@yield('content')

<hr>

<footer class="w3-padding">

     
    Copyright {{date('Y')}}
    <a href="https://www.linkedin.com/in/andrew-james-barker-/">Linkedin</a> | 
    <a href="https://www.instagram.com/mus.art.barks/">Instagram</a>
    <a href="https://github.com/AndrewJamesBarker">Git</a>
    <a href="https://twitter.com/abarkshighhorse">Twitter</a>


    <br>

    @if (Auth::check())
        You are logged in as {{auth()->user()->first}} {{auth()->user()->last}} | 
        <a href="/console/logout">Log Out</a> | 
        <a href="/console/dashboard">Dashboard</a>
    @else
        <a href="/console/login">Login</a>
    @endif

</footer>

</body>
</html>