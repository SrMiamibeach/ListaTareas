<!DOCTYPE html>
<html>

<head>
    <title>Task List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center pt-2">
            <div class="col-6 bg-light border" ">
                <p class="h1 pt-1 text-secondary">Task list</p>
            </div>
        </div>
        <br>
        <div class="row d-flex flex-column align-content-center">
            <div class="col-4 bg-light border">
                <p class="h4 pt-2">New Task</p>
            </div>
            <div class="col-4 border pt-2 pb-4">
                <strong>Task</strong>
                <form method="POST" action="/tarea">
                    {{ @csrf_field() }}
                    <input type="text" name="nombre" class="form-control"/>
                    <br>
                    <button type="submit" class="btn border ">Add Task</button>
                </form>
            </div>
        </div>
        <div class="row d-flex flex-column align-content-center mt-2">
            <div class="col-4 bg-light border">
                <p class="h4 pt-2">Current Tasks</p>
            </div>
            <div class="col-4 border pt-2 pb-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Task</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($tareas) > 0)
                            @foreach($tareas as $tarea)
                            <tr>
                                <td>{{ $tarea->nombre }}</td>
                                <td>
                                    <form method="POST" action="/tarea/{{$tarea->id}}">
                                        {{ @csrf_field() }}
                                        @method('delete')
                                        <input type="submit" class="btn bg-danger" value="Delete"/>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- <div class="col-4 border pt-2 pb-4">
                <strong>Task</strong>
                <form method="POST" action="/tarea">
                    {{ @csrf_field() }}
                    <input type="text" name="nombre" class="form-control"/>
                    <br>
                    <button type="submit" class="btn border ">Add Task</button>
                </form>
            </div> -->
        </div>
    </div>
</body>
</html>