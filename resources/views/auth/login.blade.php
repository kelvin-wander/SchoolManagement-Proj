@extends('layouts.sub-app')

@section('content')
<div class="max-h-screen flex items-center justify-center bg-gray-100 py-12 mt-20">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8 space-y-6">
        <h2 class="text-2xl font-bold text-center text-indigo-600">Sign In to Your Account</h2>

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700" for="email">Email</label>
                <div class="flex items-center border rounded px-3 py-2 bg-gray-50">
                    <i class="fas fa-envelope text-gray-400 mr-2"></i>
                    <input id="email" name="email" type="email" required class="w-full bg-transparent outline-none" placeholder="you@example.com">
                </div>
            </div>

            <div>
                <label class="block mb-1 text-sm font-medium text-gray-700" for="password">Password</label>
                <div class="flex items-center border rounded px-3 py-2 bg-gray-50">
                    <i class="fas fa-lock text-gray-400 mr-2"></i>
                    <input id="password" name="password" type="password" required class="w-full bg-transparent outline-none" placeholder="••••••••">
                </div>
            </div>

            <div class="flex justify-between items-center text-sm text-gray-600">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="remember" class="rounded">
                    Remember Me
                </label>
                <x-nav-link url='register.general-info' class="text-indigo-600 hover:underline">Forgot Password?</x-nav-link>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 font-semibold">
                Sign In
            </button>

            <p class="text-center text-sm text-gray-600 mt-4">
                Don’t have an account?
                <x-nav-link url='register.general-info' class="text-indigo-600 hover:underline">Sign Up</x-nav-link>
            </p>
        </form>
    </div>
</div>
@endsection

