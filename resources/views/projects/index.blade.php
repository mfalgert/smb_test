@extends('layouts/app')

@section('content')
    <h2>Projects</h2>
 
    @if (!$projects->count())
        No projects found
    @else
        <ul>
            @foreach($projects as $project)
                <li>
                    <a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a>
                    &nbsp;
                    {!! link_to_route('projects.edit', 'Edit', [$project->id], ['class' => 'btn btn-warning btn-xs']) !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('projects.create', 'Create New Project', null, ['class' => 'btn btn-default btn-xs']) !!}
    </p>
@endsection
