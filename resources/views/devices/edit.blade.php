@extends('template')

    @section('title', 'Edit')

    @section('content')

    <form action="{{route('update', $device)}}" method="POST">

        @csrf
        @method('PUT')

        <label for="primerNombre">name:</label>
        <input name="name" type="" value="{{$device -> name}}">
        <input name="functionality" type="" value="{{$device -> functionality}}">
        <input name="state" type="" value="{{$device -> state}}">

        <input  type="submit" value="update" >

    </form>


    @endsection
