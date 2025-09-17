@extends('layouts.app')

@section('content')
<div style="display:flex;justify-content:space-between;align-items:center">
    <h2>Tasks</h2>
    <a class="btn" href="/tasks/create">New Task</a>
</div>

@foreach($tasks as $task)
<div class="card">
    <h3>{{ $task->title }} <small style="color:#666">({{ $task->status }})</small></h3>
    <p>{{ $task->description }}</p>
    <div>
        <a class="btn" href="/tasks/{{ $task->id }}/edit">Edit</a>
        <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline">
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn" type="submit">Delete</button>
        </form>
    </div>
</div>
@endforeach

@if(method_exists($tasks,'links')) {{ $tasks->links() }} @endif

@endsection
