@extends('template')

    @section('title', 'Colmenas')
    @section('content')

    <div class="  p-6">
        <!--Table Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase flex justify-between text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600" flex-shrink-0>Listado</h2>
                <a href="{{route('hives.create')}}" class="font-bold uppercase text-gray-600" flex-shrink-0>AÑADIR COLMENA</a>
            </div>
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
                        @foreach ($hives as $hive)
                        <tr>
                            <th class="text-center" scope="row">{{ $hive->id }}</th>
                            <td class="text-center">{{$hive->name}}</td>
                            <td class="flex items-center justify-center space-x-2">
                                
                                <a class="box-content" href="{{route('hives.edit', $hive->id)}}"><span class="material-icons cursor-pointer opacity-50 hover:opacity-100" title="Editar">edit</span></a>
    
                                <form action="{{route('hives.destroy', $hive->id)}}" method="POST">
        
                                    @csrf
                                    @method('DELETE')
                                    <input class="box-content cursor-pointer material-icons opacity-50 hover:opacity-100" type="submit" value="delete" onclick="return confirm('Está por eliminar la colmena: {{$hive->name}}')">
        
        
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/table Card-->

    @endsection