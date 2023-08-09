@extends('template')

    @section('title', 'Create')

    @section('content')

    <form action="{{route('store')}}" method="POST">

        @csrf

       name:<input name="name" type="text">
       functionality:<input name="functionality" type="text">
       state:<input  name="state" type="number">
        <!-- <label for="primerNombre">Date:<input name="datetime" type="datetime"></label>-->

        <input  type="submit">

    </form>


    @endsection
