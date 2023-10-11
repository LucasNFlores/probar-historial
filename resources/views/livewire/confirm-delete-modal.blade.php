<div x-data = "{open: false}" class="fixed inset-0 flex items-center justify-center z-50" id="modal">
    <div x-show = "true" class="modal-container bg-white w-96 mx-auto p-6 rounded shadow-lg">
        <p>¿Estás seguro de que deseas eliminar este elemento?</p>
        <div class="mt-4 flex justify-end">
            <button wire:click="" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Eliminar</button>
            <button wire:click="$set('showModal', false)" class="ml-2 px-4 py-2 text-gray-600">Cancelar</button>
        </div>
    </div>
</div>
