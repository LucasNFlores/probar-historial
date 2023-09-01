@extends('template')

    @section('title', 'Editar Dispositivo')

    @section('content')
    <div class="px-10 pt-12">
    <form action="{{route('updatedevice', $device->id)}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">


        @method('put')

        @include('devices._form',['botonNombre'=>'Actualizar','botonFondo'=>'bg-orange-500','botonFondoHover'=>'hover:bg-orange-700'])
            </form>
        </div>
    @endsection

