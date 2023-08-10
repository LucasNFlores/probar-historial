@extends('template')

    @section('title', 'Index')
    @section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg border-t- border">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">Id</th>
                    <th scope="col" class="px-6 py-3 text-center">Name </th>
                    <th scope="col" class="px-6 py-3 text-center">measure </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($variables as $variable)
                <tr>
                    <th scope="row" class="text-center">{{ $variable->id }}</th>
                    <td class="text-center">{{$variable->name}}</td>
                    <td class="text-center">{{$variable->measure}}</td>
                    <td class="text-center"><a href="{{route('edit', $variable->id)}}">Edit</a>

                    <form action="{{route('destroy', $variable->id)}}" method="POST">

                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete"   onclick="return confirm('¿are you sure you want to delete?')">


                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{route('create')}}">new</a>
    @endsection
