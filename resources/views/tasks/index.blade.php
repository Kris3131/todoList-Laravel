@extends('layouts.task')

@section('main')
    <h1 class="text-center">ToDo-List</h1>
    <a href="{{ route('tasks.create') }}">New Todo</a>
    <ul>
        @foreach($tasks as $task)
            <div>
                <li>
                    {{$task->name}}
                    {{$task->isDone}}
                </li>
                <span>{{$task->created_at}}</span>
                <a href="{{route('tasks.edit',['task'=>$task->id])}}">Edit</a>
                <form action="{{route('tasks.destroy', $task)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </ul>
@endsection

