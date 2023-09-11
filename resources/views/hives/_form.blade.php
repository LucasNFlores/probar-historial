@csrf
<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Nombre:
    </label>
    <input name="name" class="shadow appearance-none border @error('name') border-red-500 @enderror w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
           id="name" type="text"  value="{{old('name',$hive->name)}}">
    @error('name')
        <p class="text-red-500 text-xs italic">{{$message}}</p>
    @enderror
</div>

<div class="mb-4 flex items-center">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Añadir al Apario :
    </label>
    <select name="apiary_id" class="form-control mx-2">
        @foreach($apiaries as $apiary)
            <option value="{{ $apiary->id }}">{{ $apiary->name }}</option>
        @endforeach
    </select>
    @error('apiary_id')
        <p class="text-red-500 text-xs italic">{{$message}}</p>
    @enderror
</div>

<div class="flex items-center justify-between">
    <button type="submit" class="{{$botonFondo}} {{$botonFondoHover}} text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit_button">
        {{$botonNombre}}
    </button>
    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="{{route('hives.index')}}">
        Cancelar
    </a>
</div>
