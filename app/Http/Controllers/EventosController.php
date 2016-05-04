<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Evento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $filtros = [
            'nome'        => $request->input('nome'),
            'realizacao'  => $request->input('realizacao'),
            'organizador' => $request->input('organizador'),
            'descricao'   => $request->input('descricao'),
            'lotacao'     => $request->input('lotacao'),
            'tipo'        => $request->input('tipo'),
        ];

        $eventos = Evento::nome($filtros['nome'])
            ->realizacao($filtros['realizacao'])
            ->organizador($filtros['organizador'])
            ->descricao($filtros['descricao'])
            ->lotacao($filtros['lotacao'])
            ->tipo($filtros['tipo'])
            ->paginate(15);

        return view('eventos.index', compact('filtros', 'eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nome' => 'required', 'realizacao' => 'required|date|after:today']);

        Evento::create($request->all());

        Session::flash('flash_message', 'Evento added!');

        return redirect('eventos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $evento = Evento::findOrFail($id);

        return view('eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $evento = Evento::findOrFail($id);

        return view('eventos.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['nome' => 'required', 'realizacao' => 'required|date|after:today', ]);

        $evento = Evento::findOrFail($id);
        $evento->update($request->all());

        Session::flash('flash_message', 'Evento updated!');

        return redirect('eventos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Evento::destroy($id);

        Session::flash('flash_message', 'Evento deleted!');

        return redirect('eventos');
    }

    /**
     * Publishes the specified event.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function publish($id)
    {
        $evento = Evento::findOrFail($id);

        $evento->publicado = true;

        $evento->save();

        Session::flash('flash_message', 'Evento published!');

        return redirect('eventos');
    }
}
