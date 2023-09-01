@extends('template')

@section('title', 'Datos')
@section('content')

    <div class="  p-6">
        <!--Table Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class=" bg-gradient-to-b from-gray-300 to-gray-100 uppercase flex  justify-between   text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600 ">Listado </h2>
                <a href="{{ route('createdata') }}" class="opacity-50 hover:opacity-100  ">
                    <span class="material-icons cursor-pointer " title="Agregar">add</span></a>
            </div>



            <div class="p-5 overflow-x-scroll">

                <table class="w-full text-sm text-left text-gray-700 uppercase ">
                    <thead class="">
                        <tr class="  border-transparent rounded-lg  ">
                            <th scope="col" class="px-6 py-3 text-center text-blue-900">Id</th>
                            <th scope="col" class="px-6 py-3 text-center text-blue-900">Nombre </th>
                            <th scope="col" class="px-6 py-3 text-center text-blue-900">Valor </th>
                            <th scope="col" class="px-6 py-3  text-center  text-blue-900">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datas as $data)
                            <tr>
                                <th scope="row" class="text-center ">{{ $data->id }}</th>
                                <td class="text-center ">{{ $data->name }}</td>
                                <td class="text-center ">{{ $data->value }}</td>
                                <td class="text-center">
                                    <form action="{{ route('destroydata', $data->id) }}" method="POST">
                                        <a href="{{ route('createdata') }}" class="opacity-50 hover:opacity-100"><span
                                                title="Detalles"
                                                class="material-icons cursor-pointer ">visibility</span></a>
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('editdata', $data->id) }}">
                                            <span title="Editar"
                                                class="material-icons opacity-50 hover:opacity-100 cursor-pointer  ">edit</span>
                                        </a>
                                        <input
                                            class="box-content cursor-pointer opacity-50 hover:opacity-100  material-icons "
                                            title="Eliminar" type="submit" value="delete"
                                            onclick="return confirm('Está por eliminar el dato: {{ $data->name }}')">
                                    </form>
                                </td>
                            </tr>
                        @empty

                            <p>No se encontró el dato {{$data}}</p>

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!--/table Card-->

    @endsection










    