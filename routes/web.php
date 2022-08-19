<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

/*
|--------------------------------------------------------------------------
| Web Routes - Rotas
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('construcao', function () {
    return view('construcao');
});

Route::group(['prefix'=>'doador'], function (){
    Route::any('/', [App\Http\Controllers\DoadorController::class, 'listadoador']);
    Route::any('cadastro', [App\Http\Controllers\DoadorController::class, 'criar']);
    Route::any('cadastro/inserir', [App\Http\Controllers\DoadorController::class, 'gravar']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
