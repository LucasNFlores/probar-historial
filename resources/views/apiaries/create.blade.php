@extends('template')

    @section('title', 'Nuevo Apiario')

    @section('content')
        <div class="px-10 pt-12">
            <form action="{{route('apiaries.store')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @include('apiaries._form',[
                'botonNombre'=>'Guardar',
                'botonFondo'=>'bg-indigo-600',
                'botonFondoHover'=> 'hover:bg-indigo-500'
                ])
            </form>
        </div>
    @endsection
