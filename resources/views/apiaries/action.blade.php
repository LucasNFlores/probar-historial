<div class="d-flex justify-content-start">
    <form action="{{ route('apiaries.destroy', $apiary->id) }}" method="POST">
        <a href="{{ route('apiaries.show', $apiary->id) }}" class="opacity-50 hover:opacity-100"><span
                class="material-icons cursor-pointer "
                title="Detalles">visibility</span></a>
        @csrf
        @method('DELETE')
        <a class="box-content" href="{{ route('apiaries.edit', $apiary->id) }}"><span
            class="material-icons cursor-pointer opacity-50 hover:opacity-100"
            title="Editar">edit</span></a>
        <input
            class="box-content cursor-pointer material-icons opacity-50 hover:opacity-100"
            type="submit" value="delete"
            onclick="return confirm('Está por eliminar el apiario: {{ $apiary->name }}')">

    </form>
</div>
