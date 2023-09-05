@extends('template')

    @section('title', 'Detalles')

    @section('content')
        <div class="px-10 pt-12">
                @include('apiaries._show', ['apiary' => $apiary])
        </div>
    @endsection
