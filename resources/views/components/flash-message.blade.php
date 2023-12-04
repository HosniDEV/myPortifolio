@if (session()->has('message'))
    <div
    x-data="{show: true}"
    x-init="setTimeout(() => show = false, 2000)"
    x-show="show" x-transition
        class="bg-red-600  text-white px-6 py-2 text-sm font-light font-sans fixed bottom-16 right-3 rounded-full shadow-lg border border-spacing-1  z-30">
        {{ session('message') }}</div>
@else
@endif
