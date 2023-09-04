@extends('template')

    @section('title', 'Detalles')

    @section('content')
        <div class="px-10 pt-12">
                @include('hives._show', ['hive' => $hive])
        </div>
    @endsection
