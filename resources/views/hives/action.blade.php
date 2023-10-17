<div class="d-flex justify-content-start ">
    <div class="flex items-center space-x-2">
        <a href="{{ route('hives.show', $hive->id) }}" class="opacity-50 hover:opacity-100"><span class="material-icons cursor-pointer " title="Detalles">visibility</span></a>
        <a class="box-content" href="{{ route('hives.edit', $hive->id) }}"><span class="material-icons cursor-pointer opacity-50 hover:opacity-100" title="Editar">edit</span></a>
        <button  itemId ="{{ $hive->id }}" class="delete-button mb-1"><i class="fas fa-trash opacity-50 hover:opacity-100 "></i></button>
      
    </div>
    
                                    
</div>
