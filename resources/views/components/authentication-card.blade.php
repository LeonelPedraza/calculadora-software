<div class="flex flex-col items-center justify-center min-h-screen p-6 bg-pink-400">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full px-6 py-8 mt-6 overflow-hidden bg-white rounded-lg shadow-md sm:max-w-2xl">
        {{ $slot }}
    </div>
</div>
