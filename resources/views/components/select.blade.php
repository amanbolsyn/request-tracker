 @props(['name', 'options', 'selected' => ''])

 <div class="m-2 mb-5">
     <label for={{$name}}>{{$slot}}</label><br>
     <select
         name={{$name}}
         id={{$name}}
         {{$attributes->merge(['class'=>'border-1 rounded-sm p-0.5 pl-1 pr-1'])}}>
         @foreach($options as $option)
         <option value="{{$option}}" {{ $selected === $option ? 'selected' : '' }} >{{$option}}</option>
         @endforeach
     </select>
     @error($name)
     <p class="text-red-500 text-sm">{{$message}}</p>
     @enderror
 </div>