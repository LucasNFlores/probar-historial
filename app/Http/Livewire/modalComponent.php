<?php

namespace App\Http\Livewire;

use App\Models\Hive;
use Livewire\Component;

class modalComponent extends Component
{
    
    public $itemId;

    public function deleteItem($itemId)
    {
        
        $hive = Hive::find($itemId);
        if ($hive) {
            $hive->delete();
            session()->flash('success', 'Colmena eliminada exitosamente.');
        } else {
            session()->flash('error', 'No se pudo encontrar la colmena para eliminar.');
        }
        
        return redirect()->route('hives.index');
    }

    public function delete()
    {
        
    }

    public function render()
    {
        return view('livewire.modalComponent');
    }
}

