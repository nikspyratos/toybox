<div class="flex flex-col items-center pt-6 min-h-screen bg-gray-100 sm:justify-center sm:pt-0 dark:bg-gray-900">
    <div>
        {{ $logo }}
    </div>

    <div class="overflow-hidden py-4 px-6 mt-6 w-full bg-white shadow-md sm:max-w-md sm:rounded-lg dark:bg-gray-800">
        {{ $slot }}
    </div>
</div>
