@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed bottom-2 right-2 px-4 py-3 rounded-lg bg-blue-500 text-white">
        <p>{{ session('success') }}</p>
    </div>
@endif
