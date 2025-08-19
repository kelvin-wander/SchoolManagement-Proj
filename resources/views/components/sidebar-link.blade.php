@props([
    'url',
    'active'=> false])
<a href="{{$url}}" class ="flex flex-row gap-5 items-center px-4 py-2 rounded-md text-sm hover:bg-gray-100 {{ $active ? 'bg-gray-100 font-semibold' : '' }}">
    
    {{ $slot }}
</a>