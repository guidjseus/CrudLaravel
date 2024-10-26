<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario/novo', [UsuariosController::class,'create'])->name('usuario_create');
Route::post('/usuario/novo', [UsuariosController::class,'store'])->name('lista_usuario');
Route::get('/usuario/ver/{id}', [UsuariosController::class,'show'])->name('show_usuario');
Route::get('/usuario/editar/{id}', [UsuariosController::class,'edit'])->name('editar_usuario');
Route::post('/usuario/update/{id}', [UsuariosController::class,'update'])->name('update_usuario');
Route::get('/usuario/excluir/{id}', [UsuariosController::class,'delete'])->name('deletar_usuario');
Route::post('/usuario/excluir/{id}', [UsuariosController::class,'destroy'])->name('excluir_usuario');
Route::get('/usuario',[UsuariosController::class,'index'])->name('usuario.index');

