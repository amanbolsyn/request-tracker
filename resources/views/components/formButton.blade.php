<button {{ $attributes->merge([
    'class'=>'hover:no-underline cursor-pointer p-1 pr-2 pl-2 rounded-sm text-lg underline'])}}>
    {{$slot}}
</button>