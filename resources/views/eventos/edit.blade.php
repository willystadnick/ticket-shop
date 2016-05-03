@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ trans('eventos.edit') }}</h1>
    <hr/>

    {!! Form::model($evento, [
        'method' => 'PATCH',
        'url' => ['/eventos', $evento->id],
        'class' => 'form-horizontal'
    ]) !!}

        @include('eventos.form')

    {!! Form::close() !!}

</div>
@endsection
