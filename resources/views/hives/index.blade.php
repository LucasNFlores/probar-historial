@extends('template')

    @section('title', 'Colmenas')
    @section('content')
        @include('modal.modalComponent')
        
        <div class="  p-6">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase flex justify-between text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600" flex-shrink-0>Listado</h2>
                <a href="{{route('hives.create')}}" class="font-bold uppercase text-gray-600" flex-shrink-0><span class="material-icons cursor-pointer " title="Agregar">add</span></a></a>
            </div>
            <div class="pt-4">
                <livewire:hives-tab />
            </div>
        </div>
    @endsection

    