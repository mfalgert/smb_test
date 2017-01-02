@extends('layouts/app')
 
@section('content')
    <h2>Create New Task</h2>
 
    {!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->id], 'class'=>'']) !!}
        @include('tasks/form', ['show_checkbox' => false])
    {!! Form::close() !!}
@endsection