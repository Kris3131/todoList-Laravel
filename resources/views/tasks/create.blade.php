@extends('layouts.task')

@section('main')
<h2>Create New ToDo</h2>
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
                <form action="{{route('tasks.store')}}" method="post" >
                    @csrf
                    <div class="field flex mt-4">
                        <label for="name">Todo</label>
                        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="請輸入代辦事項">
                        <button type="submit" class="btn btn-info">create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
