@extends('layouts.task')
@section('main')
<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card rounded-3">
                    <div class="card-body p-4">
                        <h4 class="text-center my-3 pb-3">To Do App</h4>
                        <a href="{{ route('tasks.create') }}" class="btn btn-info">New Todo</a>
                        <table class="table mb-4">
                            <thead>
                            <tr>
                                <th scope="col">Todo item</th>
{{--                                <th scope="col">Status</th>--}}
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->name}}</td>
{{--                                <td>{{$task->isDone}}</td>--}}
                                <td>
                                    <a href="{{route('tasks.edit',['task'=>$task->id])}}" class="btn btn-success ms-1">Edit</a>

                                    <form action="{{route('tasks.destroy', $task)}}" method="post" style="display: inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



