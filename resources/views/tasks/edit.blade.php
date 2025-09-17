@extends('layouts.app')

@section('content')
<h2>Edit Task</h2>
<form action="/tasks/{{ $task->id }}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <div>
        <label>Title</label><br>
        <input name="title" value="{{ $task->title }}" required>
    </div>
    <div>
        <label>Description</label><br>
        <textarea name="description">{{ $task->description }}</textarea>
    </div>
    <div>
        <label>Status</label><br>
        <select name="status">
            <option value="todo" {{ $task->status=='todo'?'selected':'' }}>To Do</option>
            <option value="in_progress" {{ $task->status=='in_progress'?'selected':'' }}>In Progress</option>
            <option value="done" {{ $task->status=='done'?'selected':'' }}>Done</option>
        </select>
    </div>
    <div style="margin-top:10px;"><button class="btn" type="submit">Update</button></div>
</form>
@endsection
