@extends('template')

    @section('title', 'Nueva Colmena')

    @section('content')
        <div class="px-10 pt-12">
            <form action="{{route('hives.store')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @include('hives._form',['botonNombre'=>'Guardar','botonFondo'=>'bg-blue-500','botonFondoHover'=> 'hover:bg-blue-700'])
            </form>
        </div>
    @endsection
