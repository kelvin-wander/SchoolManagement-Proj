@extends('layouts.sub-app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white rounded shadow mt-12">
    <h2 class="text-2xl font-bold text-indigo-600 mb-6 text-center">Step 2: Mobile Numbers</h2>

    <form method="POST" action="{{ route('register.mobile-info') }}" id="mobileForm">
        @csrf

        <div class="mb-4">
            <label for="mobile_count" class="block font-medium mb-1">How many mobile numbers do you want to monitor?</label>
            <select id="mobile_count" name="mobile_count" class="w-full border rounded p-2">
                <option value="">-- Select --</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>

        <div id="mobileInputs"></div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('register.general-info') }}" class="text-blue-500 hover:underline">← Back</a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Next →
            </button>
        </div>
    </form>
</div>

<script>
document.getElementById('mobile_count').addEventListener('change', function () {
    const count = parseInt(this.value);
    const container = document.getElementById('mobileInputs');
    container.innerHTML = ''; // Clear existing fields

    for (let i = 1; i <= count; i++) {
        container.innerHTML += `
            <div class="mb-4">
                <label class="block font-medium mb-1">Mobile Number ${i}</label>
                <input type="text" name="mobile_number_${i}" class="w-full border rounded p-2 mb-2" placeholder="Enter mobile number">

                <label class="block font-medium mb-1">Service Provider</label>
                <select name="service_provider_${i}" class="w-full border rounded p-2">
                    <option value="">-- Select Provider --</option>
                    <option value="Vodacom">Vodacom</option>
                    <option value="Tigo">Tigo</option>
                    <option value="Airtel">Airtel</option>
                    <option value="Halotel">Halotel</option>
                    <option value="TTCL">TTCL</option>
                </select>
            </div>
        `;
    }
});
</script>
@endsection

