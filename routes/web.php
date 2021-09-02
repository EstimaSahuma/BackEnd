<?php

use App\Aluno;
use Illuminate\Http\Request;
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
        return response(Aluno::all())->header('Access-Control-Allow-Origin', '*');//Access-Control-Allow-Origin
    });

    Route::get('/{id}', function ($id) {
        return response(Aluno::find($id))->header('Access-Control-Allow-Origin', '*');//Access-Control-Allow-Origin
    });

    Route::post('/save', function (Request $request){
        $aluno = new Aluno();

        $aluno->nome = $request->input('nome');
        $aluno->apelido = $request->input('apelido');
        $aluno->genero = $request->input('genero');
        $aluno->user = $request->input('user');
        $aluno->idade = $request->input('idade');
        $aluno->save();

        return response($request->all())->header('Access-Control-Allow-Origin', '*');
    });
});

Route::post('save', function (Request $request){
    $aluno = new Aluno();

    $aluno->nome = $request->input('nome');
    $aluno->apelido = $request->input('apelido');
    $aluno->genero = $request->input('genero');
    $aluno->user = $request->input('user');
    $aluno->idade = $request->input('idade');
    $aluno->save();

    return response($request->all())->header('Access-Control-Allow-Origin', '*');
});

//Route::post('save', 'AlunoController@store');
