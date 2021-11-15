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

Route::get('/', [controladorTarea::class, 'index'])->name('index');

Route::get('/showTasks', [controladorTarea::class, 'showTasks'])->name('Tasks');

Route::get('/viewAddTask', [controladorTarea::class, 'showAdd'])->name('Add');

Route::post('/tarea', [controladorTarea::class, 'create']);

Route::get('/showSearchTask', [controladorTarea::class, 'showSearchForm'])->name('search');

Route::get('/searchedTask', [controladorTarea::class, 'showSearchTask'])->name('search');

Route::delete('/tarea/{id}/{route}', [controladorTarea::class, 'destroy']);
