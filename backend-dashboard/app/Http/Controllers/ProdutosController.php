<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto as Produto;
use App\Http\Resources\Produto as ProdutoResource;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Produtos = Produto::all();
        return ProdutoResource::collection($Produtos);
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return new ProdutoResource($produto);
    }

    public function store(Request $request)
    {
        $produto = new Produto;
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->quantidade = $request->input('quantidade');

        if ($produto->save()) {
            return new ProdutoResource($produto);
        }
    }

    public function update(Request $request)
    {
        $produto = Produto::findOrFail($request->id);
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->quantidade = $request->input('quantidade');
        if ($produto->save()) {
            return new ProdutoResource($produto);
        }
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        if ($produto->delete()) {
            return new ProdutoResource($produto);
        }
    }
}
