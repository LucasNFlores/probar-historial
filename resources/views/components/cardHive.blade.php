<div>
    <!--<div class="card">-->
        <img class="w-full h-full object-cover rounded-t-lg"
            src="/images/colmena.png" alt="colmena"/>

        <div class="p-5 flex flex-col gap-3">
             <div class="flex items-center gap-2">
                <!--Titulo-->
                <h2 class="colmena-titulo" title="Mejor Colmena">
                    {{$name}}
                </h2>
                <!--Bateria-->
                <span class="flex items-center mt-1">
                    <img class="h-6" src="/images/bateria_cargada.png" alt="bateria">
                </span>
            </div>
             <!--Sensores-->
            <div class="flex items-center gap-2">
                <span class="badge-temperatura">{{$temp}}</span>
                <span class="badge-humedad">{{$humd}}</span>
                <span class="badge-presion">{{$pres}}</span>
            </div>

            <div>
                <!--Peso-->
                <span class="text-xl font-bold">
                    {{$peso}}
                </span>
                <!--Detalles-->
                <div class="mt-5 flex gap-2">
                    <button class="button-detalle">
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
