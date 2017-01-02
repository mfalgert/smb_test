@extends('layouts/app')
 
@section('content')
    <h2>Create New Project</h2>
 
    {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
        @include('projects/form')
    {!! Form::close() !!}
@endsection
