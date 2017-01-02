@extends('layouts/app')
 
@section('content')
    <h2>Edit Task</h2>
 
    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->id, $task->id]]) !!}
        @include('tasks/form', ['show_checkbox' => true])
    {!! Form::close() !!}

    {!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'route' => ['projects.tasks.destroy', $project->id, $task->id]]) !!}
        {!! Form::submit('Delete Task', ['class' => 'btn btn-danger btn-xs']) !!}
    {!! Form::close() !!}
@endsection