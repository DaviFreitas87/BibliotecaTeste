<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::post('/cadastrar-livro', function(Request $request) {

    \App\Models\Biblioteca::create([
    'titulo' => $request->titulo,
    'isbn' => $request-> isbn,
    'nome_autor' => $request-> nome_autor,
    'ano' =>  $request-> ano

    ]);

    echo "Livro criado com sucesso!";

});

Route::get('/ver-livro/{id}', function ($id){
$biblioteca = \App\Models\Biblioteca::find($id);
return view ('ver', ['biblioteca' => $biblioteca]);
});

Route::get('/editar-livro/{id}', function(Request $request, $id) {

    $biblioteca = \App\Models\Biblioteca::find($id);

    return view ('editar', ['biblioteca' => $biblioteca]);

    $biblioteca::update([
        'titulo' => $request->titulo,
        'isbn' => $request-> isbn,
        'nome_autor' => $request-> nome_autor,
        'ano' =>  $request-> ano
    
        ]);

        echo "Livro EDITADO com sucesso!";

});

Route::get('/excluir-livro/{id}', function ($id){
    $biblioteca = \App\Models\Biblioteca::find($id);
   $biblioteca -> delete ();

   echo "Livro EXCLUIDO com sucesso!";
    });