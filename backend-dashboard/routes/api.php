<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuarioController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Produtos

// List produtoss
Route::get('produtos', [ProdutosController::class, 'index']);

// List single produtos
Route::get('produtos/{id}', [ProdutosController::class, 'show']);

// Create new produtos
Route::post('produtos', [ProdutosController::class, 'store']);

// Update produtos
Route::put('produtos/{id}', [ProdutosController::class, 'update']);

// Delete produtos
Route::delete('produtos/{id}', [ProdutosController::class, 'destroy']);

//Usuarios

// List usuarios
Route::get('usuarios', [UsuarioController::class, 'index']);

// List single usuario
Route::get('usuarios/{id}', [UsuarioController::class, 'show']);

// Create new usuario
Route::post('usuarios', [UsuarioController::class, 'store']);

// Update usuarios
Route::put('usuarios/{id}', [UsuarioController::class, 'update']);

// Delete usuarios
Route::delete('usuarios/{id}', [UsuarioController::class, 'destroy']);
