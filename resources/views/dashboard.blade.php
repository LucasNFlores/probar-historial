@extends('template')
@section('title', 'Tablero')
@section('content')

     <div class="flex flex-wrap ">

        <!--Tarjeta total usuarios muestra cuando sos admin-->
        @if(auth()->user()->can('users.index'))
            <div class="w-full md:w-1/2 xl:w-1/3 p-6   hover:scale-105 transition-transform duration-300 transform origin-center hover:cursor-pointer">
                <a href="{{route('users.index')}}">
                <!--Metric Card-->
                <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4  shadow-xl p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-solid fa-users fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h2 class="font-bold uppercase text-gray-600">TOTAL DE USUARIOS</h2>
                            <p class="font-bold text-3xl">{{$userCount}}</p>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </a>
            </div>
        @endif

        <!--Tarjeta total Apiarios-->
        <div class="w-full md:w-1/2 xl:w-1/3 p-6 hover:scale-105 transition-transform duration-300 transform origin-center hover:cursor-pointer">
            <a href="{{route('apiaries.index')}}">
            <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500  shadow-xl p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h2 class="font-bold uppercase text-gray-600">TOTAL DE APIARIOS</h2>
                        <p class="font-bold text-3xl">{{$apiariesCount}}</p>
                    </div>
                </div>
            </div>
            </a>
        </div>

        <!--Tarjeta total Colmenas-->
        <div class="w-full md:w-1/2 xl:w-1/3 p-6 hover:scale-105 transition-transform duration-300 transform origin-center hover:cursor-pointer">
            <a href="{{route('hives.index')}}">
            <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-500   shadow-xl p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-5 bg-green-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h2 class="font-bold uppercase text-gray-600">TOTAL DE COLMENAS</h2>
                        <p class="font-bold text-3xl">{{$hivesCount}}</p>
                    </div>
                </div>
            </div>
            </a>
        </div>

        <!--Tarjeta total Dispositivos-->
        <div class="w-full md:w-1/2 xl:w-1/3 p-6 hover:scale-105 transition-transform duration-300 transform origin-center hover:cursor-pointers">
            <a href="{{route('devices.index')}}">
            <!--Metric Card-->
            <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500   shadow-xl p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-5 bg-red-600"><i class="fa-solid fa-microchip fas   fa-2x fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h2 class="font-bold uppercase text-gray-600">TOTAL DE DISPOSITIVOS</h2>
                        <p class="font-bold text-3xl">{{$deviceCount}}</p>
                    </div>
                </div>
            </div>
            </a>
        </div>


    {{-- <div class="flex flex-row flex-wrap flex-grow mt-2 w-full">
        @foreach ($userApiaries as $apiary)
            @foreach ($apiary->hives as $hive )
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <div class="bg-white border-transparent rounded-lg shadow-xl">

                        <x-cardHive name="{{ $hive->name }}" temp="18ºC" humd="60%" pres="900pa" peso="54" />

                    </div>
                </div>
            @endforeach
        @endforeach
    </div> --}}
    {{-- Maquetacion --}}
    <div class="flex flex-row flex-wrap flex-grow mt-2 w-full">
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <x-cardHive name="Colmena A" temp="18ºC" humd="60%" pres="900pa" peso="54" batery="100" />
                    </div>
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <x-cardHive name="Colmena B" temp="20ºC" humd="70%" pres="900pa" peso="60" batery="50"/>
                    </div>
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                      <x-cardHive name="Colmena C" temp="22ºC" humd="750%" pres="900pa" peso="74" batery="10"/>
                    </div>
                </div>
    </div>


@endsection
