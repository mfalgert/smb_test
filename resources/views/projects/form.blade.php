<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group">
    {!! link_to_route('projects.index', 'Back', null, ['class' => 'btn btn-default btn-xs']) !!}
    {!! Form::submit('Confirm', ['class'=>'btn btn-success btn-xs']) !!}
</div>