@extends('template')
@section('title', 'Tablero')
@section('content')
    <div class="flex flex-wrap  ">
        <!--Estadisticas tarjetas-->
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <!--Metric Card-->
            <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4  shadow-xl p-5">
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
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <!--Metric Card-->
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
            <!--/Metric Card-->
        </div>
        {{-- <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <!--Metric Card-->
            <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded-full p-5 bg-red-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h2 class="font-bold uppercase text-gray-600">Amenazas Detectadas</h2>
                        <p class="font-bold text-3xl">4 <span class="text-red-500"><i class="fas fa-caret-up"></i></span>
                        </p>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div> --}}
    </div>


    <div class="flex flex-row flex-wrap flex-grow mt-2">

        @foreach ($userApiaries as $apiary)
            
            @foreach ($apiary->hives as $hive )

                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <div class="bg-white border-transparent rounded-lg shadow-xl">

                        <x-cardHive name="{{ $hive->name }}" temp="18ºC" humd="60%" pres="900pa" peso="54" />

                    </div>
                </div>

            @endforeach

        @endforeach

    </div>


@endsection
