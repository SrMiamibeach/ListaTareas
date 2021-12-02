<tr>
    <td>{{ $tarea->nombre }}</td>
    <td></td>
    <td class="text-center">
        <form method="POST" action="/tarea/{{$tarea->id}}">
            {{ @csrf_field() }}
            @method('delete')
            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
        </form>
        <?php
                print_r($tarea);

        ?>
    </td>
</tr>