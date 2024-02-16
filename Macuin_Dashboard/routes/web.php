<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Middleware\CheckSession;

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
Route::get('/', function () { return view('login'); })->name('loginview');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware(CheckSession::class);

Route::get('/inicio', function () {
    return view('cliente_inicio');
})->name('inicio_cliente')->middleware(CheckSession::class);

Route::get('/registrarTicket', function () {
    // Aquí puedes agregar la lógica para registrar un ticket
})->name('registrar_ticket')->middleware(CheckSession::class);

Route::get('/usuario', function () {
    return view('perfil')->middleware(CheckSession::class);
});

Route::resource('Cliente', ClienteController::class)->middleware(CheckSession::class);