@extends('template')

    @section('title', 'Mostrar Datos')

    @section('content')
    <div class="px-10 pt-12">
            @include('datas._show', ['datas' => $datas])
    </div>

    @endsection
