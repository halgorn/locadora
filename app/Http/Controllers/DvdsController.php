<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dvd;

class DvdsController extends Controller
{
    public function create()
    {
        return view ('dvds.create');
    }

    public function store(Request $request)
    {
        Dvd::create([
            'nome' => $request->nome,
            'legenda' => $request->legenda,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        return "Dvd cadastrado com sucesso";
    }
    public function show()
    {
        $dvds = dvd::all();
        return view('dvds.show', ['dvds' => $dvds]);
    }
   /* public function show (){
        return view('list');
    }*/

}
