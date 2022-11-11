@extends('layouts.task')

@section('main')
    <h2>Edit ToDo</h2>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- component -->
    <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
        <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
            <div class="mb-4">
                <h1 class="text-grey-darkest">Todo List</h1>
                <form action="{{route('tasks.update',$task)}}" method="post" >
                    @csrf
                    @method('patch')
                    <div class="field flex mt-4">
                        <div>
                            <label for="name">Todo</label>
                            <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="{{$task->name}}">
                        </div>
                        <div>
                            <label for="isDone">工作完成</label>
                            <input type="checkbox" name="isDone" id="isDone">
                        </div>
                        <div>
                            <button type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
