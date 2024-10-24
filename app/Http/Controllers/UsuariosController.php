<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function create()
    {
        return view('usuario.create');
    }

    public function store(Request $request)
    {

        #dd($request->all());

        Usuarios::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        return "Usuario Cadastrado!";
    }

    public function show($id)
    {
        $usuario = Usuarios::findOrFail($id);
        return view('usuario.show' , ['usuario' => $usuario]);
    }

    public function edit($id)
    {
        $usuario = Usuarios::findOrFail($id);
        return view('usuario/edit' ,['usuario' => $usuario]);
        }

    public function update(Request $request, $id)
    {
        $usuario = Usuarios::findOrFail($id);
        $usuario->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        return redirect('usuario/'.$usuario->$id)->with('success','Produto Cadastrado com Sucesso!');

    }

    public function delete($id)
    {
        
        $usuario = Usuarios::findOrFail($id);
        return view('usuario.delete', compact('usuario'));
    }

    public function destroy($id)
    {

        $usuario = Usuarios::findOrFail($id);
        $usuario->delete();

        return redirect('usuario/'.$usuario->delete())->with('success','Usuario Excluido com Sucesso!');
    }

    public function index()
    {

        $usuario = Usuarios::all();
        return view('usuario.index', compact('usuario'));
    }
    

}
