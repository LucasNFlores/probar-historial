@extends('template')

@section('title', 'Usuarios')
@section('content')

<div class="  p-6">
    <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase flex justify-between text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
        <h2 class="font-bold uppercase text-gray-600" flex-shrink-0>Listado</h2>
        <a href="{{route('user.create')}}" class="font-bold uppercase text-gray-600" flex-shrink-0><span class="material-icons cursor-pointer " title="Agregar">add</span></a></a>
    </div>
    <div class="pt-4">

                <livewire:user-table />
            </div>
        </div>


 @endsection
