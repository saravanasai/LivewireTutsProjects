@extends('Layouts.master')

@section('tittle')
    ToDo Application
@endsection


@section('content')
    @livewire('todo-application.todos')
@endsection
