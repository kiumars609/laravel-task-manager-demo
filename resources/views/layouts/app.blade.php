<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Laravel Task Manager — Demo</title>
    <meta name='viewport' content='width=device-width,initial-scale=1'>
    <style>
        body{font-family: Arial, Helvetica, sans-serif; margin:20px;}
        .container{max-width:900px;margin:0 auto;}
        header{display:flex;justify-content:space-between;align-items:center;}
        nav a{margin-left:10px;}
        .card{padding:12px;border:1px solid #ddd;margin:12px 0;border-radius:6px;}
        .btn{display:inline-block;padding:6px 10px;border-radius:4px;background:#2d8cff;color:#fff;text-decoration:none;}
    </style>
</head>
<body>
<div class="container">
    <header>
        <h1><a href="/">Task Manager</a></h1>
        <nav>
            <a href="/tasks">Tasks</a>
            <a href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="/logout" method="POST" style="display:none;"></form>
        </nav>
    </header>

    @if(session('success'))<div class="card" style="background:#f0fff0">{{ session('success') }}</div>@endif

    @yield('content')

    <footer style="margin-top:40px;color:#777">Demo project • Laravel-style structure</footer>
</div>
</body>
</html>
