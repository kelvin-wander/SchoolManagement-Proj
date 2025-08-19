<nav class="bg-white shadow-md">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-indigo-700">BrandName</h1>
        <div>
            <ul class="flex space-x-6 text-gray-700">
                @if (!auth()->check())
                    <li><x-nav-link url='home'>Home</x-nav-link></li>
                    <li><x-nav-link url='loginto'>Sign In</x-nav-link></li>
                    <li><x-nav-link url='register.general-info'>Sign Up</x-nav-link></li>
                    <li><x-nav-link >Contacts</x-nav-link></li>
                @else
                    <li><x-dropdown-link><img src="{{ auth()->user()->profile_picture }}" alt="Profile Picture" class="h-8 w-8 rounded-full"></x-dropdown-link></li>    
                @endif           
            </ul>
            
        </div>

    </div>
</nav>
