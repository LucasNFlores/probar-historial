<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true" wire:click=$set('showModal', false)>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este producto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button wire:click="delete" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('show-delete-modal', function () {
            $('#deleteModal').modal('show');
        });

        Livewire.on('hide-delete-modal', function () {
            $('#deleteModal').modal('hide');
        });
    });
</script>
