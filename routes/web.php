<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mifunc', function () {

    DB::table('_vehiculo')->insert([

        'marca' => 'ford',
        'modelo' => 'ford1',
        'placa' => 'ford2',
        'color' => 'ford3',
        'tipo' => 'ford4',
        'foto_principal' => 'ford5',
        'foto_secundara' => 'ford6',
        'foto_secundara_2' => 'ford7',
        'foto_secundara_3' => 'ford9'


    ]);


    return "hola bb";
});
