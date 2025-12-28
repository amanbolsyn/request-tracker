<button {{ $attributes->merge([
    'class'=>'hover:no-underline cursor-pointer rounded-sm text-lg underline'])}}>
    {{$slot}}
</button>