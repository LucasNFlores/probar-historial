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


        <!--Nombre-->
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900" for="name">
                Nombre
            </label>
            <div class="mt-2">
                <input name="name" placeholder="Ej. Apiario 1"  class="@error('name') border-red-500 @enderror {{ $errors->has('name') ? 'border-1' : 'border-0' }} block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                       id="name" type="text"  value="{{old('name',$apiary->name)}}">
            </div>
                @error('name')
                    <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
        </div>
        <!--Nombre-->
        <!--Ubicacion-->
        <div class="col-span-full">
            <label class="block text-sm font-medium leading-6 text-gray-900" for="location">
                Ubicacion
            </label>
            <div class="mt-2">
                <input name="location" placeholder="Ej. Apostoles ruta 213 km12" class="@error('location') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                       id="name" type="text"  value="{{old('location',$apiary->location)}}">
            </div>
                @error('location')
                    <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
        </div>
        <!--Ubicacion-->
        <!--Latitud-->
        <div class="sm:col-span-3">
            <label for="latitude" class="block text-sm font-medium leading-6 text-gray-900">
                Latitud
            </label>
            <div class="mt-2">
                <input name="latitude" placeholder="Ej. -23.456789" type="text"  id="latitude" autocomplete="given-name"
                       class="@error('latitude') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                       value="{{old('latitude',$apiary->latitude)}}">
            </div>
            @error('latitude')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror
        </div>
        <!--Latitud-->
        <!--Longitud-->
        <div class="sm:col-span-3">
            <label for="longitude" class="block text-sm font-medium leading-6 text-gray-900">
                longitud
            </label>
            <div class="mt-2">
                <input name="longitude" placeholder="Ej. -45.348745" type="text"  id="longitude" autocomplete="given-name"
                       class="@error('longitude') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                       value="{{old('longitude',$apiary->longitude)}}">
            </div>
            @error('longitude')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror
        </div>
        <!--Longitud-->
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

