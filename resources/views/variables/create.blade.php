@extends('template')

    @section('title', 'Create')

    @section('content')
<!--se dejo el formulario para probar ingresar valores y ver
cuando llegue el momento de probar logica, desconozco si el calculo
se hará con una libreria de los distintos dispositivos
para determinar por ejemplo a cuanta miel corresponde el peso
si hay algún factor calculable adicional que intervenga en este tipo de operaciones
como que pese mas y se halle menos abejas de la estimada y eso afecte en la producción de miel  -->

<div class="px-10 pt-12">
        <form action="{{route('storevariable')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @include('variables._form',['botonNombre'=>'Guardar','botonFondo'=>'bg-blue-500','botonFondoHover'=> 'hover:bg-blue-700'])
        </form>
    </div>
@endsection
