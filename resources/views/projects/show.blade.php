@extends('layouts/app')
 
@section('content')
    <h2>{{ $project->name }}</h2>
 
    @if (!$project->tasks->count())
        No tasks found
    @else
        <ul>
            @foreach($project->tasks as $task)
                <li>
                    <a href="{{ route('projects.tasks.show', [$project->id, $task->id]) }}">{{ $task->name }}</a>

                    @if ($task->done)
                        (Complete)
                    @else
                        (Incomplete)
                    @endif

                    &nbsp;
                    {!! link_to_route('projects.tasks.edit', 'Edit', [$project->id, $task->id], ['class' => 'btn btn-warning btn-xs']) !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('projects.index', 'Back', null, ['class' => 'btn btn-default btn-xs']) !!}
        {!! link_to_route('projects.tasks.create', 'Create New Task', $project->id, ['class' => 'btn btn-default btn-xs']) !!}
    </p>
@endsection
