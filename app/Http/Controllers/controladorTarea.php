<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarea;

class controladorTarea extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        Tarea::create([
            'nombre' => $request->get('nombre')
        ]);
        return redirect('/viewAddTask');
    }

    public function showTasks()
    {
        // $queryTareas = DB::table('tareas')->get();KC
        $queryTareas = Tarea::get();
        return view('showTasks', ['tareas' => $queryTareas]);
    }

    public function showAdd()
    {
        return view('addTaskForm');
    }
    public function showSearchForm()
    {
        return view('searchForm');
    }

    public function showSearchTask(Request $request)
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
    public function destroy($id, $route)
    {
        Tarea::destroy($id);
        // DB::table('tareas')->where('id', '=', $id)->delete();
        return redirect('/' . $route);
    }
}
