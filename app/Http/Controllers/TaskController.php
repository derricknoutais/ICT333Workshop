<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('welcome', compact('tasks'));
    }
    public function show(Task $task){
        return view('show', compact('task'));
    } 
    public function edit(Task $task){
        return view('edit', compact('task'));
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){

        Task::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'completed' => 0
        ]);
        return redirect('/');

    }

    public function update(Task $task, Request $request){
        $task->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'completed' => 0
        ]);
        return redirect('/');
    }
    public function delete(Task $task){
        $task->delete();
        return redirect('/');
    }
}
