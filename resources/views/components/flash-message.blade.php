@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-6 left-1/2 transform -translate-x-1/2 z-50 bg-indigo-700 text-white italic px-14 py-4 py-3 rounded ">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
