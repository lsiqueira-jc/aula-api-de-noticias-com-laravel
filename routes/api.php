<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Postscontroller;
use App\Http\Controllers\AlunosController;





use App\Http\Controllers\NoticiasController;

Route::get('/',[NoticiasController::class,'listar']);
Route::post('/',[NoticiasController::class,'Cadastrar']);

use App\Http\Controllers\Noticias_DestaquesController;

Route::post('/cadastrar',[Noticias_DestaquesController::class,'Cadastrar']);
Route::get('/listar',[Noticias_DestaquesController::class,'listar']);















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
