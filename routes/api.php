<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VehiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ruta', [VehiculoController::class, 'index']);
Route::post('addUser', [UsuarioController::class, 'store']);
Route::get('getUser/{id}', [UsuarioController::class, 'show']);
Route::put('updateUser/{id}', [UsuarioController::class, 'update']);
Route::delete('deleteUser/{id}', [UsuarioController::class, 'destroy']);