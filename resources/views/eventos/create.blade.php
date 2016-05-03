@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ trans('eventos.create') }}</h1>
    <hr/>

    {!! Form::open(['url' => '/eventos', 'class' => 'form-horizontal']) !!}

        @include('eventos.form')

    {!! Form::close() !!}

</div>
@endsection
