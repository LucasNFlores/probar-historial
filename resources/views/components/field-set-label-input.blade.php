<div {{ $attributes }}>
    <label class="block text-sm font-medium leading-6 text-gray-900" for="{{$name}}">
        {{$labelName}}
    </label>
    <div class="mt-2">
        <input name="{{$name}}" placeholder="{{$placeholder}}"
               class="@error($name) border-red-500 @enderror
               {{ $errors->has($name) ? 'border-1' : 'border-0' }} block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
               id="{{$name}}" type="text"  value="{{old($name,$apiaryValue)}}">
    </div>
    @error($name)
        <p class="text-red-500 text-xs italic">{{$message}}</p>
    @enderror

    {{ $slot }}
</div>

