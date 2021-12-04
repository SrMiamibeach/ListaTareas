<?php

namespace App\Http\Controllers;


use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuarios;

class UsuarioController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuarios $request)
    {
        $request->validated();
        Usuario::create([
            'nombre' => $request->get('nombreUser'),
            'apellidos' => $request->get('apellidosUser')
        ]);
        return redirect('/viewAddTask');
    }

    /**
     * Show the form for search tasks
     */
    public function searchForm()
    {
        return view('searchUserForm');
    }

    /**
     *  Makes the task search
     */
    public function show(Request $request)
    {
        $searchedQuery = null;
        if ($request->get('name') != null && $request->get('date') != null) {
            $searchedQuery = Usuario::with(['tareas' => function ($query) use ($request) {
                $query->where('created_at', 'like', $request->get('date') . '%');
            }])->where('nombre', 'like', $request->get('name'))->get();
        } elseif ($request->get('name') != null) {
            $searchedQuery = Usuario::with('tareas')->where('nombre', 'like', $request->get('name'))->get();
        } elseif ($request->get('date') != null) {
            $searchedQuery = Usuario::with(['tareas' => function ($query) use ($request) {
                $query->where('created_at', 'like', $request->get('date') . '%');
            }])->get();
        } else {
            $searchedQuery = Usuario::with('tareas')->get();
        }
        return view('searchedUser', ['users' => $searchedQuery]);
    }
}
