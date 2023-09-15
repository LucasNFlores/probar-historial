<div>
    <!--<div class="card">-->
        <img class="w-full h-full object-cover rounded-t-lg bg-indigo-600 bg-opacity-50"
            src="/images/colmena.png" alt="colmena"/>

        <div class="p-5 flex flex-col gap-3">
             <div class="flex items-center gap-2">
                <!--Titulo-->
                <h2 class="colmena-titulo" title="Mejor Colmena">
                    {{$name}}
                </h2>
                <!--Bateria-->
                <span class="badge-temperatura"> </span>
                <span class="flex items-center mt-1">
                    <img class="h-6" src="/images/bateria_cargada.png" alt="bateria">
                </span>

                <span class="badge-temperatura"> </span>
                <span class="flex items-center mt-1">
                    <img class="h-6" src="/images/termómetro-abajo.png" alt="bateria">
                </span>

                <span class="badge-temperatura"> </span>
                <span class="flex items-center mt-1">
                    <img class="h-6" src="/images/emoji_sonriente.png" alt="bateria">
                </span>




            </div>
             <!--Sensores-->
            <div class="flex items-center gap-2">
                <span class="badge-temperatura">{{$temp}}</span>
                <span class="flex items-center mt-1">
                    <img class="h-6" src="/images/clima_día-nublado.png" alt="bateria">
                </span>

                <span class="badge-humedad">{{$humd}}</span>
                <span class="flex items-center mt-1">
                    <img class="h-6" src="/images/clima_humedad.png" alt="bateria">
                </span>

                <span class="badge-presion">{{$pres}}</span>
                <span class="flex items-center mt-1">
                    <img class="h-6" src="/images/clima_presion.png" alt="bateria">
                </span>

                <span class="   ">
                    {{$peso}}
                </span>
                <span class="flex items-center mt-1">
                    <img class="h-6" src="/images/emoji_abeja.png" alt="bateria">
                </span>

            </div>

            <div>
                <!--Peso-->


                <!--Detalles-->
                <div class="mt-5 flex gap-2">
                    <button class="button-detalle rounded-full">
                        Detalles
                    </button>
                     <!--Actualizacion-->
                    <span class="badge-actualizacion">
                        Ult. Dato 14:55 hs
                    </span>
                </div>
            </div>
        </div>
    <!--</div>-->
</div>
