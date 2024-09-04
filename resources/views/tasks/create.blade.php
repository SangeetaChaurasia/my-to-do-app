<!-- resources/views/tasks/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create New Task</h1>
    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="title" required>
        <button type="submit">Create Task</button>
    </form>
@endsection
