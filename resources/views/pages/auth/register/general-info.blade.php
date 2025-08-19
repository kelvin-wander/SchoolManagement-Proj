@extends('layouts.sub-app')

@section('content')
<div class="max-h-screen flex items-center justify-center bg-gray-100 py-12">
    <div class="w-full max-w-2xl bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-indigo-600 mb-6 text-center">Step 1: General Information</h2>

        <form action="{{ route('register.general-info') }}" method="POST" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 font-medium text-gray-700">First Name</label>
                    <input type="text" name="fname" class="w-full border p-2 rounded" required value="{{ old('fname') }}">
                </div>

                <div>
                    <label class="block mb-1 font-medium text-gray-700">Middle Name (optional)</label>
                    <input type="text" name="mname" class="w-full border p-2 rounded" value="{{ old('mname') }}">
                </div>

                <div>
                    <label class="block mb-1 font-medium text-gray-700">Last Name</label>
                    <input type="text" name="lname" class="w-full border p-2 rounded" required value="{{ old('lname') }}">
                </div>

                <div>
                    <label class="block mb-1 font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full border p-2 rounded" required value="{{ old('email') }}">
                </div>

                <div>
                    <label class="block mb-1 font-medium text-gray-700">Gender</label>
                    <select name="gender" class="w-full border p-2 rounded" required>
                        <option value="">-- Select --</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 font-medium text-gray-700">Age</label>
                    <input type="number" name="age" class="w-full border p-2 rounded" required value="{{ old('age') }}" min="1" max="100">
                </div>

                <div class="md:col-span-2">
                    <label class="block mb-1 font-medium text-gray-700">Occupation</label>
                    <input type="text" name="occupation" class="w-full border p-2 rounded" required value="{{ old('occupation') }}">
                </div>
            </div>

            <div class="text-center pt-6">
                <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700 font-semibold">
                    Next Step <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
