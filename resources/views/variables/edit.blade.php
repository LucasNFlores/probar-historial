@extends('template')

    @section('title', 'Edit')

    @section('content')

    <form action="{{route('update', $variable)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="primerNombre">name:</label>
        <input name="name" type="" value="{{$variable -> name}}">
        <input name="measure" type="" value="{{$variable -> measure}}">
        <input  type="submit" value="update" >

    </form>


    @endsection
