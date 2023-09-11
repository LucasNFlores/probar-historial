@extends('template')

@section('title', 'Dispositivos')
@section('content')
    <div class="  p-6">
        <!--Table Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div
                class=" bg-gradient-to-b from-gray-300 to-gray-100 uppercase flex  justify-between   text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600 ">Listado </h2>
                <a href="{{ route('devices.create') }}" class="opacity-50 hover:opacity-100  "><span
                        class="material-icons cursor-pointer " title="Agregar">add</span></a>
            </div>


            <div class="p-5 overflow-x-scroll">

                <table class="w-full text-sm text-left text-gray-700 uppercase ">
                    <thead class="">
                        <tr class="  border-transparent rounded-lg  ">
                            <th scope="col" class="px-6 py-3 text-center text-blue-900">Id</th>
                            <th scope="col" class="px-6 py-3 text-center text-blue-900">Nombre </th>
                            <th scope="col" class="px-6 py-3 text-center text-blue-900">Funcionalidad </th>
                            <th scope="col" class="px-6 py-3 text-center text-blue-900">Estado</th>
                            <th scope="col" class="px-6 py-3 text-center text-blue-900">Acciones </th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($devices as $device)
                            <tr>
                                <th scope="row" class="text-center">{{ $device->id }}</th>
                                <td class="text-center">{{ $device->name }}</td>
                                <td class="text-center">{{ $device->functionality }}</td>
                                <td class="text-center">{{ $device->state }}</td>

                                <td class="text-center ">
                                    <form action="{{ route('devices.destroy', $device->id) }}" method="POST">
                                        {{-- <a href="{{ route('devices.show') }}" class="opacity-50 hover:opacity-100"><span
                                                class="material-icons cursor-pointer "
                                                title="Detalles">visibility</span></a> --}}
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('devices.edit', $device->id) }}">
                                            <span class="material-icons cursor-pointer opacity-50 hover:opacity-100"
                                                title="Editar">edit</span> </a>
                                            <input
                                            class="box-content cursor-pointer   material-icons opacity-50 hover:opacity-100"
                                            title="Eliminar" type="submit" value="delete"
                                            onclick="return confirm('Está por eliminar el dato: {{ $device->name }}')">
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <p>no se encontrarón datos de dispositivos </p>
                            @endforelse
                    </tbody>
                </table>
                <div style="text-align:center;">
                    {{ $devices->links() }}
                </div>
            </div>
        </div>




@endsection







