@extends('template')

    @section('title', 'Nuevo Apiario')

    @section('content')

    <form action="{{route('apiaries.store')}}" method="POST">

        @csrf

        <label for="primerNombre">Nombre:<input name="name" type=""></label>

        <input  class="cursor-pointer" type="submit" value="Añadir Apiario">

    </form>


    @endsection
