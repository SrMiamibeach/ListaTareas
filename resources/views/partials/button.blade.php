<tr>
    <td>{{ $tarea->nombre }}</td>
    <td class="text-center">
        <form method="POST" action="/tarea/{{$tarea->id}}/showTasks">
            {{ @csrf_field() }}
            @method('delete')
            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
        </form>
    </td>
</tr>