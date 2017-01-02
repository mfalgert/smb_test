@extends('layouts/app')
 
@section('content')
    <h2>Edit Project</h2>
 
    {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->id]]) !!}
        @include('projects/form')
    {!! Form::close() !!}

    {!! Form::open(['class' => 'form-inline', 'method' => 'DELETE', 'route' => ['projects.destroy', $project->id]]) !!}
    	{!! Form::submit('Delete Project', ['class' => 'btn btn-danger btn-xs']) !!}
	{!! Form::close() !!}
@endsection
