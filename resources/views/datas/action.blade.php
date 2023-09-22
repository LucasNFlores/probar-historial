<div class="d-flex justify-content-start">
    <form action="{{ route('data.destroy', $data->id) }}" method="POST">
        <a href="{{ route('data.show', $data->id) }}" class="opacity-50 hover:opacity-100"><span
                title="Detalles"
                class="material-icons cursor-pointer ">visibility</span></a>
        @csrf
        @method('DELETE')
        <a href="{{ route('data.edit', $data->id) }}">
            <span title="Editar"
                class="material-icons opacity-50 hover:opacity-100 cursor-pointer  ">edit</span>
        </a>
        <input
            class="box-content cursor-pointer opacity-50 hover:opacity-100  material-icons "
            title="Eliminar" type="submit" value="delete"
            onclick="return confirm('Está por eliminar el dato: {{ $data->name }}')">


        </form>
</div>
