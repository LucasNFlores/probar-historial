<div class="d-flex justify-content-start">
    <form action="{{route('variables.destroy', $variable->id)}}" method="POST">
        <a href="{{route('variables.show', $variable->id)}}">
            <span class=" text-center material-icons cursor-pointer opacity-50 hover:opacity-100 " title="Editar">visibility</span> </a>
        @csrf
        <a href="{{route('variables.edit', $variable->id)}}">
            <span class=" text-center material-icons cursor-pointer opacity-50 hover:opacity-100 " title="Editar">edit</span> </a>
        @method('DELETE')
        <input class="box-content cursor-pointer opacity-50 hover:opacity-100   material-icons " type="submit" value="delete"  title="Eliminar" onclick="return confirm('Está por eliminar la variable: {{$variable->name}}')">
    </td>
</form>
</div>
