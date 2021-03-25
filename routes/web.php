<?php

use App\Http\Controllers\ClienteController;
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

Route::redirect('/', 'cliente');

Route::get('/cliente', [ClienteController::class, 'show'])->name('cliente');

Route::get('/cliente/lista', [ClienteController::class, 'findAll'])->name('clientes');

Route::get('/cliente/{id}', [ClienteController::class, 'buscaId'])->name('detalhes');

Route::post('/cliente/store', [ClienteController::class, 'inserir'])->name('novo');

Route::put('cliente/edit/{id}', [ClienteController::class, 'editar'])->name('editar');

Route::delete('cliente/destroy/{id}', [ClienteController::class, 'deletar'])->name('deletar');
