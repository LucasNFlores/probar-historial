@extends('template')

    @section('title', 'Index')
    @section('content')


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg border-t- border">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">Id</th>
                        <th scope="col" class="px-6 py-3 text-center">Name</th>
                        <th scope="col" class="px-6 py-3 text-center">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($apiaries as $apiary)
                    <tr>
                        <th scope="row" class="text-center">{{ $apiary->id }}</th>
                        <td class="text-center">{{$apiary->name}}</td>
                        <td class="text-center"><a href="{{route('edit', $apiary->id)}}">EDIT</a>

                        <form action="{{route('destroy', $apiary->id)}}" method="POST">

                            @csrf
                            @method('DELETE')
                            <input type="submit" value="DEL" onclick="return confirm('El dato se va a eliminar')">


                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{route('create')}}">NUEVO</a>

    @endsection
