<div x-data="{ showModal: false }" style="display: none">
    <!-- Tu tabla aquí -->
    <div class="p-6">
        
        <div class="pt-4">
             <!--Table Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase flex justify-between text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600" flex-shrink-0>Listado</h2>
                <a href="{{ route('hives.create') }}" class="font-bold uppercase text-gray-600" flex-shrink-0><span class="material-icons cursor-pointer " title="Agregar">add</span></a>
            </div>
            <div class="p-5">
                <table class="w-full p-5 text-gray-700">
                    <thead>
                        <tr>
                            <th class="text-center text-blue-900">ID</th>
                            <th class="text-center text-blue-900">Nombre</th>
                            <th class="text-center text-blue-900">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($hives as $hive)
                            <tr wire:key="{{ $hive->id }}" id="{{$hive->id}}">
                                <th class="text-center" scope="row">{{ $hive->id }}</th>
                                <td class="text-center">{{ $hive->name }}</td>
                                <td class="flex items-center justify-center space-x-2">
                                    <a href="{{ route('hives.show', $hive->id) }}" class="opacity-50 hover:opacity-100"><span class="material-icons cursor-pointer " title="Detalles">visibility</span></a>
                                    <a class="box-content" href="{{ route('hives.edit', $hive->id) }}"><span class="material-icons cursor-pointer opacity-50 hover:opacity-100" title="Editar">edit</span></a>
                                    <form action="{{ route('hives.destroy', $hive->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input id="B-{{$hive->id}}" class="box-content cursor-pointer material-icons opacity-50 hover:opacity-100" style="width: 0px;" type="submit" value="delete">
                                    </form>

                                        <button itemId ="{{ $hive->id }}" class="delete-button mb-2"><i class="fas fa-trash opacity-50 hover:opacity-100"></i></button>


                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No se encontraron datos de las colmenas</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const id = button.getAttribute('itemId');

            // Crear el overlay
            const overlay = document.createElement('div');
            overlay.className = 'overlay';

            // Crear el modal y establecer su contenido con el ID correspondiente
            const modal = document.createElement('div');
            modal.className = 'modal';
            modal.innerHTML = `
                <div class="modal-content">
                    <h1 class="text-3xl font-bold mb-4 text-center">¡Atención!</h1>
                    <p class="text-sm text-gray-500 mb-4 text-center">Está por eliminar la colmena con ID: ${id}</p>
                    <div class="flex justify-center mt-4">
                        <button class="confirm-button px-4 py-2 mr-6 bg-red-600 text-white rounded hover:bg-red-500">Confirmar</button>
                        <button class="cancel-button px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Cancelar</button>
                    </div>
                </div>
            `;

            // Agregar el overlay y el modal al cuerpo del documento
            document.body.appendChild(overlay);
            document.body.appendChild(modal);

            // Obtener los botones de confirmar y cancelar dentro del modal
            const confirmButton = modal.querySelector('.confirm-button');
            const cancelButton = modal.querySelector('.cancel-button');

            // Agregar manejadores de eventos para los botones de confirmar y cancelar
            confirmButton.addEventListener('click', function() {
                // Lógica para confirmar la eliminación (puedes enviar una solicitud AJAX aquí)
                console.log('Eliminando la colmena con ID: ' + id);

                const confirmDelete = document.getElementById(`B-${id}`)
                confirmDelete.click()
                // Cerrar el modal y el overlay
                closeModal(modal, overlay);
            });

            cancelButton.addEventListener('click', function() {
                // Cerrar el modal y el overlay si se hace clic en Cancelar
                closeModal(modal, overlay);
            });
        });
    });

    // Función para cerrar el modal y el overlay
    function closeModal(modal, overlay) {
        document.body.removeChild(modal);
        document.body.removeChild(overlay);
    }
});

    </script>

<style>
    /* Estilo para el overlay de fondo */
.overlay {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Color de fondo oscuro con opacidad */
    z-index: 100; /* Z-index alto para colocar el overlay encima de todo */
}

/* Estilo para el modal */
.modal {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 50vh;
    left: 50vw;

    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 101    ; /* Z-index más alto para colocar el modal encima del overlay */
    max-width: 80%; /* Máximo ancho del modal */
    text-align: center;
}

</style>
        </div>





{{-- ----------------------------------------------------------------------------------------------------------------------------------------------- --}}





       