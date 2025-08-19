@props([
    'url' => 'home'
])

<a href="{{ route($url) }}" {{ $attributes }} class="hover:text-indigo-600 border-b-2 border-transparent hover:border-indigo-600 pb-1">
    {{ $slot }}
</a>
