<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'App\Http\Controllers\PrincipalController@principal');
// Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);
// Route::get('/teste/{mensagem}', function (string $mensagem) {
//     echo $mensagem;
// });
Route::get('/', [App\Http\Controllers\PrincipalController::class, 'render'])->name('site.index');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'render'])->name('site.contato');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'render'])->name('site.contato');
Route::get('/sobrenos', [App\Http\Controllers\SobreController::class, 'render'])->name('site.sobrenos');
Route::get('/login', [App\Http\Controllers\SobreController::class, 'render'])->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', [App\Http\Controllers\SobreController::class, 'render'])->name('app.clientes');
    Route::get('/fornecedores', [App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', [App\Http\Controllers\SobreController::class, 'render'])->name('app.produtos');
});

//Redirecionamento de rotas
Route::get('/rota1', function () { 
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function () { 
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::fallback(function() {
    echo 'Esta página nao existe. <a href="'. route('site.index') .'"> clique aqui!</a> para voltar a página inicial.';
});

Route::get('/testParameters/{p1}/{p2}', [App\Http\Controllers\TestParameters::class,  'getParameters']);