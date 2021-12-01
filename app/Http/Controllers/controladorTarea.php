<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarea;
use App\Models\Usuario;

class controladorTarea extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $queryTareas = Tarea::get();
        return view('showTasks', ['tareas' => $queryTareas]);
    }
    /**
     * Show the form for creating a new task
     */
    public function create()
    {
        $usuarios = Usuario::all();
        return view('addTaskForm',['usuarios' => $usuarios]);
    }

    /**
     * Create a new task
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        Tarea::create([
            'nombre' => $request->get('nombre'),
            'usuario_id' => $request->get('usuarioId')
        ]);
        return redirect('/viewAddTask');
    }

    /**
     *  Shows the current tasks
     */
    // public function showTasks()
    // {
    //     // $queryTareas = DB::table('tareas')->get();KC
    //     $queryTareas = Tarea::get();
    //     return view('showTasks', ['tareas' => $queryTareas]);
    // }

    /**
     * Show the form for search tasks
     */
    public function showForm()
    {
        return view('searchForm');
    }

    /**
     *  Makes the task search
     */
    public function show(Request $request)
    {
        $searchedQuery = Tarea::where('nombre', 'like', '%' . $request->get('search') . '%')->get();
        return view('searchedTask', ['tareas' => $searchedQuery]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tarea::destroy($id);
        return redirect('/');
    }
}
