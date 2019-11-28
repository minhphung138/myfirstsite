@extends('layouts.layout')


@section('title')
    Minh {{$first}}
@endsection

@section('content')
    
    <h1>This is the list of task that I need to do</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{$task}}</li>
        @endforeach
    </ul>
@endsection