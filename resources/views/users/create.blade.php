@extends('template')

@section('title', 'Nuevo Usuario')

@section('content')
    <div class="px-10 pt-12">
        <form action="{{route('users.store')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @include('users._form', [
                'botonNombre' => 'Guardar',
                'botonFondo' => 'bg-blue-500',
                'botonFondoHover' => 'hover:bg-blue-700',
                'user' => $users,

            ])
        </form>
    </div>
@endsection


