@extends('template')

    @section('title', 'Nuevo Apiario')

    @section('content')

    
<div class="px-10 pt-12">
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div class="p-5 items-center text-center justify-between">
                <table class="w-full p-5 text-gray-700">
                    <tbody>
                        <form action="{{route('apiaries.store')}}" method="POST">

                            @csrf
                    
                            <label for="primerNombre" class="">Nombre: <input name="name" type=""></label>
                    
                            <input  class="cursor-pointer" type="submit" value=" Añadir Apiario">
                    
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
</div>
    @endsection
