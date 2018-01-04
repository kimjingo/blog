<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    //
    public function index()

    {
    	$tasks = Task::where('id','>',4)->get();
    	return view('tasks.index', compact('tasks'));
    // return $tasks;
    }

    public function show(Task $task)

    {
    	// return $task;
		// $tasks = Task::find($id);
		// dd($task);
	    return view('tasks.show', compact('task'));
    }
}
