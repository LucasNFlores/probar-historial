@extends('template')

    @section('title', 'Variables')
    @section('content')
     <div class="  p-6">
        <div class="bg-white border-transparent rounded-lg shadow-xl">
            <div class=" bg-gradient-to-b from-gray-300 to-gray-100 uppercase flex  justify-between   text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                <h2 class="font-bold uppercase text-gray-600 ">Listado  </h2>
                <a href="{{route('createvariable')}}" class="opacity-50 hover:opacity-100  ">
                    <span class="material-icons cursor-pointer " title="Agregar">add</span></a>
            </div>

    <div class="p-5 overflow-x-scroll">

        <table class="w-full text-sm text-left text-gray-700 uppercase ">
            <thead class="">
                <tr class="  border-transparent rounded-lg">
                    <th scope="col" class="px-6 py-3 text-center text-blue-900">Id</th>
                    <th scope="col" class="px-6 py-3 text-center text-blue-900">Nombre </th>
                    <th scope="col" class="px-6 py-3 text-center text-blue-900">Variable </th>
                    <th scope="col" class="px-6 py-3 text-center text-blue-900">Acciones </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($variables as $variable)
                <tr>

                    <th scope="row" class="text-center">{{ $variable->id }}</th>
                    <td class="text-center">{{$variable->name}}</td>
                    <td class="text-center">{{$variable->measure}}</td>

                    <td class="text-center">

                        <form action="{{route('destroyvariable', $variable->id)}}" method="POST">
                        <a href="{{route('createvariable')}}" title="Detalles" class="opacity-50 hover:opacity-100"><span class="material-icons cursor-pointer " >visibility</span></a>
                            @csrf
                            <a href="{{route('editvariable', $variable->id)}}">
                                <span class=" text-center material-icons cursor-pointer opacity-50 hover:opacity-100 " title="Editar">edit</span> </a>
                            @method('DELETE')
                            <input class="box-content cursor-pointer opacity-50 hover:opacity-100   material-icons " type="submit" value="delete"  title="Eliminar" onclick="return confirm('Está por eliminar la variable: {{$variable->name}}')">
                        </td>
                    </form>
                    @empty
                    <p>no se encontrarón variables</p>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
<!--/table Card-->

@endsection

