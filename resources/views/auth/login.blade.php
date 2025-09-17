@extends('layouts.app')

@section('content')
<h2>Login</h2>
<form action="/login" method="POST">
    <div><label>Email</label><br><input name="email" required></div>
    <div><label>Password</label><br><input name="password" type="password" required></div>
    <div style="margin-top:10px;"><button class="btn" type="submit">Login</button></div>
</form>
<p>Don't have an account? <a href="/register">Register</a></p>
@endsection
