<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('salvarProduto', [App\Http\Controllers\produtoController::class, 'store_to_produtos'])
    ->name('produto.salvar');
Route::post('salvarMarca', [App\Http\Controllers\MarcaController::class, 'store'])
    ->name('marca.salvar');


Route::post('editarMarca', [App\Http\Controllers\MarcaController::class, 'update'])
    ->name('marca.editar');


Route::get('/produtos', [App\Http\Controllers\produtoController::class, 'index'])
    ->name('produto.listar');
Route::get('/marcas', [App\Http\Controllers\MarcaController::class, 'index'])
    ->name('marca.listar');


Route::get('novaMarca', [App\Http\Controllers\MarcaController::class, 'create']);
Route::get('novoProduto', [App\Http\Controllers\produtoController::class, 'create']);