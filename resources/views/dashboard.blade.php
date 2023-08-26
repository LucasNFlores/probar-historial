@extends('template')
@section('title', 'Tablero')
@section('content')
<div class="flex flex-wrap">
    <!--Estadisticas tarjetas-->
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <div
            class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded-full p-5 bg-blue-600"><i
                            class="fas fa-server fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h2 class="font-bold uppercase text-gray-600">Server Uptime</h2>
                    <p class="font-bold text-3xl">152 days</p>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <div
            class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded-full p-5 bg-indigo-600"><i
                            class="fas fa-tasks fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h2 class="font-bold uppercase text-gray-600">To Do List</h2>
                    <p class="font-bold text-3xl">7 tasks</p>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Metric Card-->
        <div
            class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded-full p-5 bg-red-600"><i
                            class="fas fa-inbox fa-2x fa-inverse"></i></div>
                </div>
                <div class="flex-1 text-right md:text-center">
                    <h2 class="font-bold uppercase text-gray-600">Issues</h2>
                    <p class="font-bold text-3xl">3 <span class="text-red-500"><i
                                class="fas fa-caret-up"></i></span></p>
                </div>
            </div>
        </div>
        <!--/Metric Card-->
    </div>
</div>


<div class="flex flex-row flex-wrap flex-grow mt-2">
    <!--Tabla-->


    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Advert Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">



                <x-cardHive name="colmena1" temp="37ºC" humd="25%" pres="1025pa" peso="54kg"/>




        </div>
        <!--/Advert Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Advert Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">



                <x-cardHive name="colmena1" temp="37ºC" humd="25%" pres="1025pa" peso="54kg"/>


        </div>
        <!--/Advert Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
        <!--Advert Card-->
        <div class="bg-white border-transparent rounded-lg shadow-xl">



                <x-cardHive name="colmena1" temp="37ºC" humd="25%" pres="1025pa" peso="54kg"/>


        </div>
        <!--/Advert Card-->
    </div>
</div>


@endsection
