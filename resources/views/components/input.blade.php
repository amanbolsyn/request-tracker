 @props(['name'])

 <input
     autocomplete="off"
     id="{{$name}}"
     name="{{$name}}"
     required
     {{ $attributes->merge(['class'=>'border-1 rounded-sm p-0.5 pl-1 pr-1'])}}>
 @error($name)
 <p class="text-red-500 text-sm">{{$message}}</p>
 @enderror