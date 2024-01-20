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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/unidades', function () {
    return view('Unidades');
});

Route::get('/colaboradores', function () {
    return view('Colaboradores');
});

Route::get('/cargos', function () {
    return view('cargos');
});

Route::get('/cargocolabor', function () {
    return view('CargoColaborador');
});

