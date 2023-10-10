<?php

namespace App\Http\Livewire;

use App\Models\Hive;
use Livewire\Component;

use function Pest\Laravel\delete;

class ConfirmDeleteModal extends Component
{
    
    public $productId;
    public $showModal = false;

    
    
    public function confirmDelete($productId)
    {
        
        // Aquí puedes escribir la lógica para eliminar el elemento con el ID $this->itemId
        // ...
        $this->productId = $productId;
        // Una vez eliminado, cierra el modal
       

        // Emite un evento para informar a otros componentes que el elemento ha sido eliminado
        $this->emit('itemDeleted');
    }

    public function delete($productId){
        $s = Hive::find($productId) -> delete();
        return redirect()->route('hives.index');
    }

    public function render()
    {
        return view('livewire.confirm-delete-modal');
    }
}
