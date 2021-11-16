@extends('layouts.index')
@section('addTasks')
<div class="row d-flex flex-column align-content-center">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">New Task</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <strong>Task</strong>
        <form method="POST" action="/tarea">
            {{ @csrf_field() }}

            <input type="text" name="nombre" class="form-control" placeholder="Task Name" />
            <br>
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