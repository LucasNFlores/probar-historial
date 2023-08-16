@extends('template')

    @section('title', 'Create')

    @section('content')

    <form action="{{route('hives.store')}}" method="POST">

        @csrf

        <label for="primerNombre">Nombre:<input name="name" type=""></label>

        <input  type="submit">

    </form>


    @endsection