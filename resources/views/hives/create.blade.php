@extends('template')

    @section('title', 'Nueva Colmena')

    @section('content')

    <form action="{{route('hives.store')}}" method="POST">

        @csrf

        <label for="primerNombre">Nombre:<input name="name" type=""></label>

        <input  type="submit" value="Añadir Colmena">

    </form>


    @endsection