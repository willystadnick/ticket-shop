@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Evento</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>{{ trans('eventos.nome') }}</th><th>{{ trans('eventos.realizacao') }}</th><th>{{ trans('eventos.organizador') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $evento->id }}</td> <td> {{ $evento->nome }} </td><td> {{ $evento->realizacao }} </td><td> {{ $evento->organizador }} </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection