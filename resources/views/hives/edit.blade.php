@extends('template')

    @section('title', 'Edit')

    @section('content')

    <form action="{{route('hives.update', $hive)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="primerNombre">Nombre:</label>
        <input name="name" type="" value="{{$hive -> name}}">

        <input  type="submit" value="Confirmar">

    </form>


    @endsection