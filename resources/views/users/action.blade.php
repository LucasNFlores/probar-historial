<div class="d-flex justify-content-start">
    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
        <a href="{{ route('user.show', $user->id) }}" class="opacity-50 hover:opacity-100"><span
                title="Detalles"
                class="material-icons cursor-pointer ">visibility</span></a>
        @csrf
        @method('DELETE')
        <a href="{{ route('user.edit', $user->id) }}">
            <span title="Editar"
                class="material-icons opacity-50 hover:opacity-100 cursor-pointer  ">edit</span>
        </a>
        <input
            class="box-content cursor-pointer opacity-50 hover:opacity-100  material-icons "
            title="Eliminar" type="submit" value="delete"
            onclick="return confirm('Está por eliminar el usuario: {{ $user->name }}')">


        </form>
</div>
