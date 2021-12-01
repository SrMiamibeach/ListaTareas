@extends('addTaskForm')
@section('userForm')
<div class="row d-flex flex-column align-content-center">
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
            <button type="submit" class="btn border ">Add Task</button>
        </form>
    </div>
</div>
@endsection