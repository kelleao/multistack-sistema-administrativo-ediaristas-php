<?php

use App\Http\Controllers\Servico_Controller;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rotas para trabalhar com serviços
Route::get('/servicos', [Servico_Controller::class, 'index'])->name('servicos.index');
Route::get('/servicos/create', [Servico_Controller::class, 'create'])->name('servicos.create');
Route::post('/servicos', [Servico_Controller::class, 'store'])->name('servicos.store');
Route::get('/servicos/{servico}/edit', [Servico_Controller::class, 'edit'])->name('servicos.edit');
Route::put('/servicos/{servico}', [Servico_Controller::class, 'update'])->name('servicos.update');

