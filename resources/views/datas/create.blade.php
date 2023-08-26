@extends('template')

    @section('title', 'Create')

    @section('content')
<!--se dejo el formulario para probar ingresar valores y ver
cuando llegue el momento de probar logica, desconozco si el calculo
se hará con una libreria de los distintos dispositivos
para determinar por ejemplo a cuanta miel corresponde el peso
si hay algún factor calculable adicional que intervenga en este tipo de operaciones
como que pese mas y se halle menos abejas de la estimada y eso afecte en la producción de miel  -->
    <form action="{{route('store')}}" method="POST">

        @csrf
       name:<input name="name" type="text">
       measure:<input  name="measure" type="number">
        <input  type="submit">

    </form>


    @endsection
