 @props(['name', 'value' => ''])

 <textarea
    autocomplete="off"
    id="{{$name}}"
    name="{{$name}}"
    rows="4"
    required
    {{ $attributes->merge(['class'=>'border-1 rounded-sm p-0.5 pl-1 pr-1 resize-none'])}}>{{$value}}</textarea>
 @error($name)
 <p class="text-red-500 text-sm">{{$message}}</p>
 @enderror