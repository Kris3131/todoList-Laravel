<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        return view('tasks.index');
    }
    public function create(){
        return view('tasks.create');
    }
    public function store(Request $request){
        $todoName = $request->validate([
            "name" => 'required|min:5'
        ]);
        auth()->user()->tasks()->create($todoName);
        return redirect()->route('root')->with('notice','Todo 新增成功');
    }
}
