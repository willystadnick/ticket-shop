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
                <tr>
                    {!! Form::open(['url' => '/eventos', 'method' => 'get', 'class' => 'form-horizontal']) !!}
                    <th>{!! Form::text('nome', $filtros['nome'], ['class' => 'form-control']) !!}</th>
                    <th>{!! Form::date('realizacao', $filtros['realizacao'], ['class' => 'form-control']) !!}</th>
                    <th>{!! Form::text('organizador', $filtros['organizador'], ['class' => 'form-control']) !!}</th>
                    <th>{!! Form::text('descricao', $filtros['descricao'], ['class' => 'form-control']) !!}</th>
                    <th>{!! Form::text('lotacao', $filtros['lotacao'], ['class' => 'form-control']) !!}</th>
                    <th>{!! Form::select('tipo', App\Evento::$tipos, $filtros['tipo'], ['class' => 'form-control']) !!}</th>
                    <th>
                        {!! Form::submit('Filtrar', ['class' => 'btn btn-primary btn-xs']) !!}
                        <a href="{{ url('eventos') }}" class="btn btn-danger btn-xs">Limpar</a>
                    </th>
                    {!! Form::close() !!}
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
                        @if(!$item->publicado)
                        <a href="{{ url('/eventos/' . $item->id . '/publish') }}" class="btn btn-warning btn-xs">Publicar</a>
                        @endif
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
