@csrf
<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Nombre:
    </label>
    <input name="name" class="shadow appearance-none border @error('name') border-red-500 @enderror w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
           id="name" type="text"  value="{{old('name',$data->name)}}">
    @error('name')
        <p class="text-red-500 text-xs italic">{{$message}}</p>
    @enderror
</div>
<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="value">
        Valor:
    </label>
    <input name="value" class="shadow appearance-none border @error('value') border-red-500 @enderror w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
           id="value" type="text"  value="{{old('value',$data->value)}}">
    @error('value')
        <p class="text-red-500 text-xs italic">{{$message}}</p>
    @enderror
</div>

<div class="flex items-center justify-between">
    <button type="submit" class="{{$botonFondo}} {{$botonFondoHover}} text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        {{$botonNombre}}
    </button>
    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="{{route('datas.index')}}">
        Cancelar
    </a>
</div>
