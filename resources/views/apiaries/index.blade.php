@extends('template')

@section('title', 'Apiarios')
@section('content')

    <div class="  p-6">
        <!--Table Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <diV
                class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase flex justify-between text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Listado</h2>
                <a href="{{ route('apiaries.create') }}" class="font-bold uppercase text-gray-600" flex-shrink-0><span
                        class="material-icons cursor-pointer " title="Agregar">add</span></a></a>
            </diV>
            <div class="p-5">
                <table class="w-full p-5 text-gray-700">
                    <thead>
                        <tr>
                            <th class="text-center text-blue-900">ID</th>
                            <th class="text-center text-blue-900">Nombre</th>
                            <th class="text-center text-blue-900">Acción</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($apiaries as $apiary)
                            <tr>
                                <th scope="row" class="text-center">{{ $apiary->id }}</th>
                                <td class="text-center">{{ $apiary->name }}</td>
                                <td class="flex items-center justify-center space-x-2">



                                    <form action="{{ route('apiaries.destroy', $apiary->id) }}" method="POST">
                                        <a href="{{ route('apiaries.create') }}" class="opacity-50 hover:opacity-100"><span
                                                class="material-icons cursor-pointer "
                                                title="Detalles">visibility</span></a>
                                        @csrf
                                        @method('DELETE')
                                        <a class="box-content" href="{{ route('apiaries.edit', $apiary->id) }}"><span
                                            class="material-icons cursor-pointer opacity-50 hover:opacity-100"
                                            title="Editar">edit</span></a>
                                        <input
                                            class="box-content cursor-pointer material-icons opacity-50 hover:opacity-100"
                                            type="submit" value="delete"
                                            onclick="return confirm('Está por eliminar el apiario: {{ $apiary->name }}')">
                                        

                                    </form>
                            @empty

                                <p>No se encontró el apario {{$apiary}}</p>        

                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!--/table Card-->

    @endsection
