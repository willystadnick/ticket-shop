@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    {!! Form::label('nome', trans('eventos.nome'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('nome', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('realizacao') ? 'has-error' : ''}}">
    {!! Form::label('realizacao', trans('eventos.realizacao'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::date('realizacao', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('realizacao', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('organizador') ? 'has-error' : ''}}">
    {!! Form::label('organizador', trans('eventos.organizador'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('organizador', null, ['class' => 'form-control']) !!}
        {!! $errors->first('organizador', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('descricao') ? 'has-error' : ''}}">
    {!! Form::label('descricao', trans('eventos.descricao'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('lotacao') ? 'has-error' : ''}}">
    {!! Form::label('lotacao', trans('eventos.lotacao'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::number('lotacao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('lotacao', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    {!! Form::label('tipo', trans('eventos.tipo'), ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::select('tipo', App\Evento::$tipos, null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-3">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
