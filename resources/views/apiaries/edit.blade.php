@extends('template')

    @section('title', 'Edit')

    @section('content')

    <form action="{{route('apiaries.update', $apiary)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="primerNombre">Nombre:</label>
        <input name="name" type="" value="{{$apiary -> name}}">

        <input  type="submit" value="Update">

    </form>


    @endsection
    