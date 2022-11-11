<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
    public function index(){

        $tasks = auth()->user()->tasks()->orderBy('id', 'desc')->get();
        return view('tasks.index',['tasks' => $tasks]);
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
    public function edit($id){
        $task = auth()->user()->tasks->find($id);
        return view('tasks.edit',['task'=>$task]);
    }
    public function update(Request $request, $id){
        $task = auth()->user()->tasks->find($id);
        $todoName = $request->validate([
            "name" => 'required|min:5',
            'isDone'
        ]);
        $task->update($todoName);
        return redirect()->route('root')->with('notice','Todo 更新成功');

    }
    public function destroy($id){
        $task = auth()->user()->tasks->find($id);
        $task->delete();
        return redirect()->route('root')->with('notice','文章已刪除！');
    }
}
