<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/avisos', function () {
    return view('avisos');
})->name('avisos.blade');

Route::get('/contratos', function () {
    return view('contratos');
})->name('contratos.blade');

Route::get('/estados', function () {
    return view('estados');
})->name('estados.blade');

Route::get('/incidencias', function () {
    return view('incidencias');
})->name('incidencias.blade');

Route::get('/informacion', function () {
    return view('informacion');
})->name('informacion.blade');

Route::get('/prestamos', function () {
    return view('prestamos');
})->name('prestamos.blade');

Route::get('/reservas', function () {
    return view('reservas');
})->name('reservas.blade');



Route::get('/register',[RegisterController::class, 'create'])->middleware('guest')->name('register.index');
Route::post('/register',[RegisterController::class, 'store'])->name('register.store');
Route::get('/login',[SessionController::class, 'create'])->middleware('guest')->name('login.index');
Route::post('/login',[SessionController::class, 'store'])->name('login.store');
Route::get('/logout',[SessionController::class, 'destroy'])->middleware('auth')->name('login.destroy');
