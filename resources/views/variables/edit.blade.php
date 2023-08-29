@extends('template')

    @section('title', 'Edit')

    @section('content')

    <form action="{{route('updatevariable', $variable)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="primerNombre">name:</label>
        <input name="name" type="" value="{{$variable -> name}}">
        <input name="measure" type="" value="{{$variable -> measure}}">
        <input  type="submit" value="Enviar" >

    </form>


    @endsection
