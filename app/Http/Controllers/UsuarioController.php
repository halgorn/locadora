<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('usuarios.usuarioCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'cliente' => $request->cliente,
            'admin' => $request->admin

        ]);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::all();
        return view('usuarios.usuarioShow', ['user' => $user]);
    }

    public function ExcluirUsuario($id)
   {
       $user = User::findOrFail($id);
       $user->delete();
       return view('dashboard');
   }

   public function Edit($id)
   {
       $user = User::findOrFail($id);
       return view('usuario.usuarioEdit', ['user'=> $user]);
   }

   public function update(Request $request, $id)
   {
       $user = User::findOrFail($id);


       $user->update([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>$request->password,
           'cliente'=>$request->cliente,
           'admin' =>$request->admin
       ]);
       return view('dashboard');

   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
