<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100">

<div class="container text-center">
    <h1 class="mb-4">Welcome to Laravel App</h1>

    @auth
        <p>Hello, {{ auth()->user()->name }}!</p>
        <a href="{{ route('dashboard') }}" class="btn btn-success">Go to Dashboard</a>
        <a href="{{ route('logout') }}"
           class="btn btn-danger ms-2"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    @else
        <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
    @endauth
</div>

</body>
</html>
