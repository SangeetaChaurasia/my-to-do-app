<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();

        return view('tasks.index', ['tasks' => $task]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max: 255',
        ]);

        Task::create(['title' => $request->title]);

        return redirect('/');
    }

    public function edit($id)
    {
        $task = Task::where('id', $id)->first();
        
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $task = Task::where('id', $id)->first();
        //dd($task->save());
        $task->update(['title' => $request->title]);

        return redirect('/');
    }

    public function delete($id)
    {
        $task = Task::where('id', $id)->first();
        $task->delete();

        return redirect('/');
    }

    
}
