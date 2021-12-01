@extends('layouts.index')
@section('addTasks')
<div class="row d-flex flex-column align-content-center">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">New Task</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <strong>Task Name</strong>
        <form method="POST" action="/tarea">
            {{ @csrf_field() }}

            <input type="text" name="nombre" class="form-control" placeholder="Task Name" />
            <br>
            <div class="row">
                <div class="col-6">
                    <select class="form-select" name="usuarioId">
                        <option selected>Select a user</option>
                        @if(count($usuarios) > 0)
                        @each('partials.option',$usuarios,'usuario')
                        @endif
                    </select>
                </div>
            </div><br>
            @error('nombre')
            <div class="alert alert-danger" role="alert">
                Do not leave empty
            </div>
            @enderror
            <button type="submit" class="btn border ">Add Task</button>
        </form>
    </div>
</div>
<div class="row d-flex flex-column align-content-center mt-2">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">New User</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <strong>User</strong>
        <form method="POST" action="/addUser">
            {{ @csrf_field() }}
            <input type="text" name="nombre" class="form-control" placeholder="Name" />
            <br>
            <input type="text" name="apellidos" class="form-control" placeholder="Surname" />
            @error('nombre')
            <div class="alert alert-danger" role="alert">
                Do not leave empty
            </div>
            @enderror
            <br>
            <button type="submit" class="btn border ">Add User</button>
        </form>
    </div>
</div>
@endsection