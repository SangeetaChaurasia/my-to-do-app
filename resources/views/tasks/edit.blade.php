<!-- resources/views/tasks/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>
    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" name="title" value="{{ $task->title }}" required>
        <button type="submit">Update Task</button>
    </form>
@endsection
