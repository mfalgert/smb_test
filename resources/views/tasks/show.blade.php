@extends('layouts/app')
 
@section('content')
    <h2>
        {{ $project->name }} / 
        {{ $task->name }}
    </h2>
 	
    <b>Created at: </b>
    <p>
    	{{ $task->created_at }}
    </p>
	<b>Updated at: </b>
    <p>
    	{{ $task->updated_at }}
    </p>

 	<b>Task description:</b>
    <p>
    	@if (empty($task->description))
    		(Empty)
    	@else
    		{{ $task->description }}
    	@endif
   	</p>

    <p>
        {!! link_to_route('projects.show', 'Back', [$project->id], ['class' => 'btn btn-default btn-xs']) !!}
    </p>
@endsection
