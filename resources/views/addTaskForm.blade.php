@extends('layouts.index')
@section('addBlock')
<div class="row d-flex flex-column align-content-center">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">New Task</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <strong>Task Name</strong>
        <form method="POST" action="/tarea">
            {{ @csrf_field() }}
            @error('taskName')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            <input type="text" name="taskName" class="form-control" placeholder="Task Name" />

            <br>
            <div class="row">
                <div class="col-6">
                    <select class="form-select" name="usuarioId">
                        <option selected>Select a user</option>
                        @if(count($usuarios) > 0)
                        @each('partials.option',$usuarios,'usuario')
                        @endif
                    </select><br>
                    <button type="submit" class="btn border ">Add Task</button>

                </div>
                <div class="col-6">
                    @error('usuarioId')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
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
            @error('nombreUser')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            <input type="text" name="nombreUser" class="form-control" placeholder="Name" />
            <br>
            @error('apellidosUser')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            <input type="text" name="apellidosUser" class="form-control" placeholder="Surname" />
            <br>
            <button type="submit" class="btn border ">Add User</button>
        </form>
    </div>
</div>
@endsection