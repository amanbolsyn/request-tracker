@props(['active' => false])

<a {{ $attributes->merge([
    'class' => ($active ? 'underline ' : '') . 'm-2 hover:underline'])}}>
    {{$slot}}
</a>