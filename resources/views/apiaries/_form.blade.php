@csrf
<div class="border-b border-gray-900/10 pb-4">
    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Apiarios</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Complete el formulario con la información de apiarios</p>
        </div>
    </div>
</div>

<div class="border-b border-gray-900/10 pb-10">
    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-field-set-label-input
            class="sm:col-span-4"
            label-name="Nombre"
            name="name"
            apiary-value="{{$apiary->name}}"
            placeholder="Ej. Apiario 1"
        />
        <x-field-set-label-input
            class="sm:col-span-full"
            label-name="Ubicacion"
            name="location"
            apiary-value="{{$apiary->location}}"
            placeholder="Ej. Apostoles ruta 213 km12"
        />
        <x-field-set-label-input
            class="sm:col-span-3"
            label-name="Latitud"
            name="latitude"
            apiary-value="{{$apiary->latitude}}"
            placeholder="Ej. -23.545678"
        />
        <x-field-set-label-input   {{--comentario--}}
            class="sm:col-span-3"
            label-name="Longitud"
            name="longitude"
            apiary-value="{{$apiary->longitude}}"
            placeholder="Ej. -53.545678"
        />
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="{{route('apiaries.index')}}" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600" >
        Cancelar
    </a>
    <button type="submit" class="{{$botonFondo}} {{$botonFondoHover}} rounded-md px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        {{$botonNombre}}
    </button>
  </div>

