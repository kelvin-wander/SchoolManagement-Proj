@extends('layouts.sub-app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white rounded shadow mt-12">
    <h2 class="text-2xl font-bold text-indigo-600 mb-6 text-center">Step 4: Set Your Password</h2>

    <form method="POST" action="{{ route('register.password') }}">
        @csrf
        

        <div class="mb-4">
            <label for="password" class="block font-medium mb-1">Password</label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                class="w-full border rounded p-2" 
                required 
                placeholder="Enter password"
            >
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block font-medium mb-1">Confirm Password</label>
            <input 
                type="password" 
                id="password_confirmation" 
                name="password_confirmation" 
                class="w-full border rounded p-2" 
                required 
                placeholder="Confirm password"
            >
        </div>

        <button type="submit" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Complete Registration
        </button>
    </form>
</div>
@endsection

