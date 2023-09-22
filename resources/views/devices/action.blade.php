<div class="d-flex justify-content-start">
    <form action="{{ route('devices.destroy', $device->id) }}" method="POST">
        <a href="{{ route('devices.show',$device->id) }}" class="opacity-50 hover:opacity-100"><span
               class="material-icons cursor-pointer "
               title="Detalles">visibility</span></a>
       @csrf
       @method('DELETE')
       <a href="{{ route('devices.edit', $device->id) }}">
           <span class="material-icons cursor-pointer opacity-50 hover:opacity-100"
               title="Editar">edit</span> </a>
           <input
           class="box-content cursor-pointer   material-icons opacity-50 hover:opacity-100"
           title="Eliminar" type="submit" value="delete"
           onclick="return confirm('Está por eliminar el dato: {{ $device->name }}')">
   </form>
</div>
