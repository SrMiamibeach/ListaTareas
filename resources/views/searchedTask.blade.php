@extends('searchForm')

@section('searchedTasks')
<div class="row d-flex flex-column align-content-center mt-2">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">Current Tasks</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Task</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                @if(count($tareas) > 0)
                @foreach($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->nombre }}</td>
                </tr>
                @endforeach
                @endif

            </tbody>
        </table>
    </div>
</div>
@endsection