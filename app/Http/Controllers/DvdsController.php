<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dvd;
use App\Models\User;

class DvdsController extends Controller
{
    public function create()
    {
        return view ('dvds.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('imagem') && $request->imagem->isValid()){
            $imagePath = $request->imagem->store('public');
        }
        Dvd::create([
            'nome' => $request->nome,
            'legenda' => $request->legenda,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
            'categoria' =>$request->categoria,
            'imagem' => $imagePath

        ]);

        return view('dashboard');
    }
    public function show()
    {

        $dvds = Dvd::all();
        return view('dvds.show', ['dvds' => $dvds]);
    }
   public function excluir($id)
   {
       $dvd = Dvd::findOrFail($id);
       $dvd->delete();
       return view('dashboard');
   }
   public function edit($id)
   {
       $dvds = Dvd::findOrFail($id);
       return view('dvds.editar', ['dvds'=> $dvds]);
   }

   public function update(Request $request, $id)
   {
       $dvd = Dvd::findOrFail($id);

       if ($request->hasFile('imagem') && $request->imagem->isValid()){

        $imagePath = $request->imagem->store('public');
        }

       $dvd->update([
           'nome'=>$request->nome,
           'legenda'=>$request->legenda,
           'preco'=>$request->preco,
           'quantidade'=>$request->quantidade,
           'categoria' =>$request->categoria,
           'imagem' => $imagePath
       ]);
       return view('dashboard');

   }

   public function home(){
       return view('welcome');
   }




}
