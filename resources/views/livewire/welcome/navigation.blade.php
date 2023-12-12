<div class="z-10 p-6 sm:fixed sm:top-0 sm:right-0 text-end">
    @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 dark:text-gray-400 hover:text-gray-900 focus:rounded-sm dark:hover:text-white focus:outline focus:outline-2 focus:outline-red-500" wire:navigate>Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 dark:text-gray-400 hover:text-gray-900 focus:rounded-sm dark:hover:text-white focus:outline focus:outline-2 focus:outline-red-500" wire:navigate>Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="font-semibold text-gray-600 dark:text-gray-400 hover:text-gray-900 focus:rounded-sm ms-4 dark:hover:text-white focus:outline focus:outline-2 focus:outline-red-500" wire:navigate>Register</a>
        @endif
    @endauth
</div>
