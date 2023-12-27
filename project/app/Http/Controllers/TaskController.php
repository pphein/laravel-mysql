<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('welcome', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        if($request['task']) {
            $task = new Task();
            $task->task = $request['task'];
            $task->save();
        }

        $tasks = Task::orderBy('created_at', 'desc')->get()->all();

        return view('welcome', ['tasks' => $tasks]);
    }

    public function delete($id)
    {
        Task::destroy($id);
        $tasks = Task::all();
        
        return view('welcome', ['tasks' => $tasks]);
    }
}
