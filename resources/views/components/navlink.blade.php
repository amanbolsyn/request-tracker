@props(['active' => false])

<a {{$attributes}} class = "{{$active ? 'underline' : ''}} m-2 hover:underline">
    {{$slot}}
</a>