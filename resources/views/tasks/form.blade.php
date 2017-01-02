<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>
 
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => 5]) !!}
</div>

@if ($show_checkbox)
	<div class="form-group">
	    {!! Form::label('done', 'Completed:') !!}
	    {!! Form::hidden('done', 0) !!}
	    {!! Form::checkbox('done', 1) !!}
	</div>
@endif
 
<div class="form-group">
    {!! link_to_route('projects.show', 'Back', [$project->id], ['class' => 'btn btn-default btn-xs']) !!}
    {!! Form::submit('Confirm', ['class'=>'btn btn-success btn-xs']) !!}
</div>