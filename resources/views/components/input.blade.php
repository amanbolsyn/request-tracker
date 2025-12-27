 @props(['name'])
 
 <div class="m-2 mb-5">
        <label for={{$name}}>{{$slot}}</label><br>
        <input 
        autocomplete="off" 
        id="{{$name}}" 
        name = "{{$name}}" 
        required 
        {{ $attributes->merge(['class'=>'border-1 rounded-sm p-0.5 pl-1 pr-1'])}}>
</div>
