@extends('layouts.sub-app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white rounded shadow mt-12">
    <h2 class="text-2xl font-bold text-indigo-600 mb-6 text-center">Step 3: Bank Accounts</h2>

    <form method="POST" action="{{ route('register.bank-info') }}" id="bankForm">
        @csrf

        <div class="mb-4">
            <label for="account_count" class="block font-medium mb-1">How many bank accounts do you want to monitor?</label>
            <select id="account_count" name="account_count" class="w-full border rounded p-2">
                <option value="">-- Select --</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>

        <div id="bankInputs"></div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('register.mobile-info') }}" class="text-blue-500 hover:underline">← Back</a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Next →
            </button>
        </div>
    </form>
</div>

<script>
document.getElementById('account_count').addEventListener('change', function () {
    const count = parseInt(this.value);
    const container = document.getElementById('bankInputs');
    container.innerHTML = ''; // Clear existing fields

    for (let i = 1; i <= count; i++) {
        container.innerHTML += `
            <div class="mb-4">
                <label class="block font-medium mb-1">Account Number ${i}</label>
                <input type="text" name="bank_account_number_${i}" class="w-full border rounded p-2 mb-2" placeholder="Enter account number">

                <label class="block font-medium mb-1">Bank</label>
                <select name="bank_${i}" class="w-full border rounded p-2">
                    <option value="">-- Select Bank --</option>
                    <option value="NMB">NMB</option>
                    <option value="CRDB">CRDB</option>
                    <option value="NBC">NBC</option>
                    <option value="TPB">TPB</option>
                    <option value="AccessBank">Access Bank</option>
                </select>
            </div>
        `;
    }
});
</script>
@endsection

