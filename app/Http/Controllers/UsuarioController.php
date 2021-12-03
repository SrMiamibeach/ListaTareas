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
        $request->validate();
        Usuario::create([
            'nombre' => $request->get('nombreUser'),
            'apellidos' => $request->get('appellidosUser')
        ]);
        return redirect('/viewAddTask');
    }
}
