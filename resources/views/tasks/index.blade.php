@extends('layouts.task')

@section('main')
    <h1 class="text-center">ToDo-List</h1>
    <a href="{{ route('tasks.create') }}">New Todo</a>
@endsection
