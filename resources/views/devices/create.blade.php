@extends('template')

    @section('title', 'Nuevo Dispositivo')

@section('content')
    <div class="px-10 pt-12">


        <form action="{{route('storedevice')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @include('devices._form',['botonNombre'=>'Guardar',
            'botonFondo'=>'bg-blue-500',
            'botonFondoHover'=> 'hover:bg-blue-700'
            'hives'=> $hives
            ])
        </form>
    </div>
@endsection


