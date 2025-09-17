@extends('layouts.app')

@section('content')
<h2>New Task</h2>
<form action="/tasks" method="POST">
    <div>
        <label>Title</label><br>
        <input name="title" required>
    </div>
    <div>
        <label>Description</label><br>
        <textarea name="description"></textarea>
    </div>
    <div>
        <label>Status</label><br>
        <select name="status">
            <option value="todo">To Do</option>
            <option value="in_progress">In Progress</option>
            <option value="done">Done</option>
        </select>
    </div>
    <div style="margin-top:10px;"><button class="btn" type="submit">Create</button></div>
</form>
@endsection
