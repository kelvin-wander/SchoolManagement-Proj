<aside id="sdBar" class="static w-[300px] min-h-screen bg-white border-r ">
    
    <!-- Logo / Brand -->
    <div class="flex items-center relative gap-2 p-4 border-b flex-shrink-0">
        <div class="h-8 w-8 rounded-lg flex items-center justify-center">
            
            <x-icons.dollar class="h-4 w-4 mr-2 text-white" />
        </div>
        <div>
            <h2 class="font-semibold text-sm">FinanceTracker</h2>
            <p class="text-xs text-gray-500">Personal Finance</p>
        </div>
    </div>

    <!-- Navigation Links -->
    <nav class="flex-1 overflow-y-auto mt-4 px-2 space-y-1">
        <x-sidebar-link url="dashboard" :active="request()->is('profile')">
            <x-icons.user class="h-4 w-4 mr-2" />  
            Profile</x-sidebar-link>
        <x-sidebar-link url="dashboard" :active="request()->is('budget')">
            <x-icons.wallet class="h-4 w-4 mr-2" />
            Budget</x-sidebar-link>
        <x-sidebar-link url="dashboard" :active="request()->is('transactions')">
            <x-icons.credit-card class="h-4 w-4 mr-2" />
            Transactions</x-sidebar-link>
        <x-sidebar-link url="dashboard" :active="request()->is('statistics')">
            <x-icons.bar-chart class="h-4 w-4 mr-2" /> 
            Statistics</x-sidebar-link>
        <x-sidebar-link url="dashboard" :active="request()->is('billNotif')">
            <x-icons.bell class="h-4 w-4 mr-2" /> 
            Bill Notifications</x-sidebar-link>
    </nav>
    <x-sidebar-button url="/">Return</x-sidebar-button>

</aside>