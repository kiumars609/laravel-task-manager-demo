@extends('layouts.app')

@section('content')
<h2>Register</h2>
<form action="/register" method="POST">
    <div><label>Name</label><br><input name="name" required></div>
    <div><label>Email</label><br><input name="email" required></div>
    <div><label>Password</label><br><input name="password" type="password" required></div>
    <div><label>Confirm Password</label><br><input name="password_confirmation" type="password" required></div>
    <div style="margin-top:10px;"><button class="btn" type="submit">Register</button></div>
</form>
@endsection
