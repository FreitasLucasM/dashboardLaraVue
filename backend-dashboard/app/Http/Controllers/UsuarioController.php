<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Usuario as UsuarioResource;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $Usuarios = Usuario::all();
        return UsuarioResource::collection($Usuarios);
    }

    public function show($id)
    {
        $Usuario = Usuario::findOrFail($id);
        return new UsuarioResource($Usuario);
    }

    public function store(Request $request)
    {
        $Usuario = new Usuario;
        $Usuario->nome = $request->input('nome');
        $Usuario->email = $request->input('email');
        $Usuario->idade = $request->input('idade');
        $Usuario->contato = $request->input('contato');

        if ($Usuario->save()) {
            return new UsuarioResource($Usuario);
        }
    }

    public function update(Request $request)
    {
        $Usuario = Usuario::findOrFail($request->id);
        $Usuario->nome = $request->input('nome');
        $Usuario->email = $request->input('email');
        $Usuario->idade = $request->input('idade');
        $Usuario->contato = $request->input('contato');
        if ($Usuario->save()) {
            return new UsuarioResource($Usuario);
        }
    }

    public function destroy($id)
    {
        $Usuario = Usuario::findOrFail($id);
        if ($Usuario->delete()) {
            return new UsuarioResource($Usuario);
        }
    }
}
