<?php

namespace App\Http\Controllers;
use App\Models\Locacao;
use App\Models\Dvd;
use Illuminate\Http\Request;

class LocacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('locacao.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Locacao::create([

            'nome_locador' => $request->nome_locador,
            'nome_filme' => $request->nome_filme,
            'data_inicial' => $request->data_inicial,
            'data_final' => $request->data_final

        ]);
        $dvd = Dvd::findOrFail($request->id_filme);

        $dvd->update([
            'quantidade'=>$request->quantidade,
        ]);
        return view('dashboard');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(){

        $locacao = Locacao::all();

        return view('locacao.show', ['locacao' => $locacao]);

    }

}
