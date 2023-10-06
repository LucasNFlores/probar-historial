<div x-data="{ showModal: false, itemId: null }">
    <!-- Tu tabla aquí -->
    <div class="p-6">
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
                            <tr>
                                <th class="text-center" scope="row">{{ $hive->id }}</th>
                                <td class="text-center">{{ $hive->name }}</td>
                                <td class="flex items-center justify-center space-x-2">
                                    <a href="{{ route('hives.show', $hive->id) }}" class="opacity-50 hover:opacity-100"><span class="material-icons cursor-pointer " title="Detalles">visibility</span></a>
                                    <a class="box-content" href="{{ route('hives.edit', $hive->id) }}"><span class="material-icons cursor-pointer opacity-50 hover:opacity-100" title="Editar">edit</span></a>
                                    <form action="{{ route('hives.destroy', $hive->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <div><button x-on:click="showModal = true; itemId = {{ $hive->id }}" class="text-red-600 hover:text-red-900">Eliminar</button></div>
                                    
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

        <!-- Modal -->
        <div x-show="showModal" class="fixed inset-0 flex items-center justify-center z-50">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

            <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6">
                    <h1 class="text-3xl font-bold mb-4 text-center">¡Atención!</h1>
                    <p class="text-sm text-gray-500 mb-4 text-center">Está por eliminar esta colmena.</p>

                    <div class="flex justify-center mt-4">
                        <form id="delete-form" x-bind:action="'{{ route('hives.destroy', $hive->id) }}' + itemId" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="confirm-button" class="px-4 py-2 mr-6 bg-red-600 text-white rounded hover:bg-red-500">Confirmar</button>
                        </form>
                        <button id="cancel-button" x-on:click="showModal = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Cancelar</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteItem(itemId) {
        fetch(`/hives/${itemId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json',
            },
        })
        .then(response => {
            if (response.ok) {
                // Lógica para manejar la eliminación en la interfaz de usuario
                const rowToDelete = document.getElementById(`row-${itemId}`);
                if (rowToDelete) {
                    rowToDelete.remove();
                }
                // Cierra el modal después de manejar la eliminación, usando Alpine.js
                Alpine.store('showModal', false);
            } else {
                console.error('Error al eliminar el elemento.');
                // Manejar el error, mostrar un mensaje al usuario, etc.
            }
        })
        .catch(error => {
            console.error('Error al eliminar el elemento:', error);
            // Manejar el error, mostrar un mensaje al usuario, etc.
        });
    }
</script>
