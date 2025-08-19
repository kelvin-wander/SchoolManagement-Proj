@props([
        'hide' => 'inline',        
        'bgaround' => 'border-t border-gray-700 bg-gray-900 text-gray-400'
])
<div class="text-center text-sm mt-auto {{ $bgaround }} py-3 w-full">
        © 2023 BrandName. All rights reserved.
        <a href="#" class="hover:underline {{ $hide }}">| Privacy Policy |</a> 
        <a href="#" class="hover:underline {{ $hide }}">| Terms of Service |</a> 
        <a href="#" class="hover:underline {{ $hide }}">| Cookies Policy |</a>
</div>

<!-- $isItHome ? "border-t border-gray-700 bg-gray-900 text-gray-400" : "bg-gray-100 border-0 text-black" -->
