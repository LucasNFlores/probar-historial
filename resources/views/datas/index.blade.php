@extends('template')

@section('title', 'Datos')
@section('content')

        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class=" bg-gradient-to-b from-gray-300 to-gray-100 uppercase flex  justify-between   text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600 ">Listado </h2>
                <a href="{{ route('data.create') }}" class="opacity-50 hover:opacity-100  ">
                    <span class="material-icons cursor-pointer " title="Agregar">add</span></a>

                </div>
                <livewire:data-table />
            </div>


 @endsection
