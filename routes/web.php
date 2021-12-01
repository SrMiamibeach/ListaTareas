<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorTarea;
use App\Http\Controllers\UsuarioController;


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

Route::get('/', [controladorTarea::class, 'index'])->name('index');

Route::get('/showTasks', [controladorTarea::class, 'showTasks'])->name('Tasks');

Route::get('/viewAddTask', [controladorTarea::class, 'create'])->name('Add');

Route::post('/tarea', [controladorTarea::class, 'store']);

Route::get('/showSearchTask', [controladorTarea::class, 'showForm'])->name('search');

Route::get('/searchedTask', [controladorTarea::class, 'show'])->name('search');

Route::delete('/tarea/{id}', [controladorTarea::class, 'destroy']);

Route::POST('/addUser', [UsuarioController::class, 'store']);
