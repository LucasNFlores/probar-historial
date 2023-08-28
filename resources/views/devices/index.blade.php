@extends('template')

    @section('title', 'Index')
    @section('content')
    <div class="  p-6">
        <!--Table Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase flex justify-between text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600">Listado</h2>
            </div>

    <div class="p-5">

        <table class="w-full text-sm text-left text-gray-700 uppercase ">
            <thead class="">
                <tr class="  border-transparent rounded-lg shadow-xl">
                    <th scope="col" class="px-6 py-3 text-center text-blue-900">Id</th>
                    <th scope="col" class="px-6 py-3 text-center text-blue-900">Nombre </th>
                    <th scope="col" class="px-6 py-3 text-center text-blue-900">Funcionalidad </th>
                    <th scope="col" class="px-6 py-3 text-center text-blue-900">Estado</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($devices as $device)
                <tr>
                    <th scope="row" class="text-center">{{ $device->id }}</th>
                    <td class="text-center">{{$device->name}}</td>
                    <td class="text-center">{{$device->functionality}}</td>
                    <td class="text-center">{{$device->state}}</td>

                    <td class="text-center "><a href="{{route('edit', $device->id)}}">
                        <form action="{{route('destroy', $device->id)}}" method="POST">
                        <a href="{{route('createdata')}}" class="opacity-50 hover:opacity-100">Agregar<span class="material-icons cursor-pointer " >add</span></a>
                            @csrf
                            @method('DELETE')
                            <input class="box-content cursor-pointer   material-icons " type="submit" value="delete"   onclick="return confirm('Está por eliminar el dato: {{$device->name}}')">
                        <span class="material-icons cursor-pointer">edit</span> </a></td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--/table Card-->

@endsection





