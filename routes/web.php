<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorTarea;

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

Route::get('/', [controladorTarea::class,'show'])->name('alltareas');

Route::post('/tarea', [controladorTarea::class,'create'])->name('addtareas');

Route::delete('/tarea/{id}', [controladorTarea::class,'destroy'])->name('deletetareas');
