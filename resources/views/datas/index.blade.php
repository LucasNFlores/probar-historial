@extends('template')

    @section('title', 'Index')
    @section('content')
    <div class="shadow-md sm:rounded-lg border-t- border">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="  border-transparent rounded-lg shadow-xl">
                    <th scope="col" class="px-6 py-3 text-center">Id</th>
                    <th scope="col" class="px-6 py-3 text-center">Name </th>
                    <th scope="col" class="px-6 py-3 text-center">measure </th>
                    <th scope="col" class="px-6 py-3 text-center"><a href="{{route('createdata')}}">New Data</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <th scope="row" class="text-center border-transparent shadow-xl">{{ $data->id }}</th>
                    <td class="text-center border-transparent shadow-xl">{{$data->name}}</td>
                    <td class="text-center border-transparent shadow-xl">{{$data->measure}}</td>
                    <td class="text-center border-transparent shadow-xl"><a href="{{route('edit', $data->id)}}">Edit</a>

                    <form action="{{route('destroy', $data->id)}}" method="POST">

                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete"   onclick="return confirm('¿are you sure you want to delete?')">


                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection
