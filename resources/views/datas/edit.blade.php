@extends('template')

    @section('title', 'Edit')

    @section('content')

    <form action="{{route('update', $data)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="primerNombre">name:</label>
        <input name="name" type="" value="{{$data -> name}}">
        <input name="value" type="" value="{{$data -> value}}">
        <input  type="submit" value="update" >

    </form>


    @endsection
