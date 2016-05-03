@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Eventos <a href="{{ url('/eventos/create') }}" class="btn btn-primary pull-right btn-sm">{{ trans('eventos.create') }}</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>{{ trans('eventos.nome') }}</th>
                    <th>{{ trans('eventos.realizacao') }}</th>
                    <th>{{ trans('eventos.organizador') }}</th>
                    <th>{{ trans('eventos.descricao') }}</th>
                    <th>{{ trans('eventos.lotacao') }}</th>
                    <th>{{ trans('eventos.tipo') }}</th>
                    <th>{{ trans('app.actions') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($eventos as $item)
                <tr>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->realizacao }}</td>
                    <td>{{ $item->organizador }}</td>
                    <td>{{ $item->descricao }}</td>
                    <td>{{ $item->lotacao }}</td>
                    <td>{{ App\Evento::$tipos[$item->tipo] }}</td>
                    <td>
                        <a href="{{ url('eventos', $item->id) }}" class="btn btn-info btn-xs">{{ trans('app.show') }}</a>
                        <a href="{{ url('/eventos/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">{{ trans('app.edit') }}</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/eventos', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit(trans('app.delete'), ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $eventos->render() !!} </div>
    </div>

</div>
@endsection
