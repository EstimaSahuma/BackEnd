<?php

use App\Aluno;
use Illuminate\Support\Facades\Route;

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

Route::prefix('aluno')->group(function () {
    Route::get('/', function () {
        return response(Aluno::all())->header('Acess-Control-Allow-Origin', '*');
    });
});
