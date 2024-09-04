<!-- resources/views/tasks/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Task list</h1>
    <ul>
        @foreach ($tasks as $task)
            <li> {{ $task->title }}
                <a href="/tasks/{{ $task->id }}">Edit</a>
                
                <form action="/tasks/{{ $task->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection