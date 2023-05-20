<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Postscontroller;

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\NoticiasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => ['TokenMiddleware']], function () {
  Route::get('/',[NoticiasController::class,'listar']);

});



// Route::get('/buscar', [AlunosController::class,'buscar']);

// Route::get('/',[NoticiasController::class,'listar']);
Route::post('/',[NoticiasController::class,'Cadastrar']);
