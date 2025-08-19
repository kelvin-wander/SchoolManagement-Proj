@props([
    'url'=>'/',
    'icon' => null, 
    'bgClass' => 'bg-yellow-500',
    'hoverClass' => 'hover:bg-yellow-600',
    'textClass' => 'text-black'
])

<a href="{{ $url }}" class="{{ $bgClass }} {{ $hoverClass }} {{ $textClass }} px-4 py-2 rounded-md">
        @if($icon)
            <i class="fa fa-{{ $icon }}"></i>
        @endif
        {{ $slot }}   
</a>