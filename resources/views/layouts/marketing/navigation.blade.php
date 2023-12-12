<header x-data="{ open: false }" class="fixed w-full">
    <nav class="py-2.5 bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center px-4 mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/toybox-logo.png') }}" class="mr-3 h-6 sm:h-9" alt="Toybox Logo" />
                <span class="self-center text-xl font-semibold text-white whitespace-nowrap dark:text-matisse-400">{{ config('app.name') }}</span>
            </a>
            <div class="flex items-center lg:order-2">
                @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="py-2 px-4 text-sm font-medium text-gray-800 rounded-lg sm:mr-2 lg:py-2.5 lg:px-5 hover:bg-gray-100 focus:ring-4 focus:ring-gray-500 focus:outline-none dark:text-matisse-400 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="py-2 px-4 text-sm font-medium text-gray-800 rounded-lg sm:mr-2 lg:py-2.5 lg:px-5 hover:bg-gray-100 focus:ring-4 focus:ring-gray-500 focus:outline-none dark:text-matisse-400 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="py-2 px-4 text-sm font-medium text-gray-800 rounded-lg sm:mr-2 lg:py-2.5 lg:px-5 hover:bg-gray-100 focus:ring-4 focus:ring-gray-500 focus:outline-none dark:text-matisse-400 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Register</a>
                            @endif
                        @endauth
                @endif
                <button @click="open = !open" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden dark:text-gray-400 hover:bg-gray-100 focus:ring-2 focus:ring-gray-200 focus:outline-none dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" :aria-expanded="open">
                    <span class="sr-only">Open main menu</span>
                    <x-heroicon-s-bars-3 class="w-6 h-6"></x-heroicon-s-bars-3>
                </button>
            </div>

            <div x-bind:class="{'hidden': !open }" class="justify-between items-center w-full lg:flex lg:order-1 lg:w-auto" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:mt-0 lg:space-x-8">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 rounded lg:p-0 lg:bg-transparent text-matisse-700 bg-matisse-500 lg:text-matisse-700 dark:text-matisse-400" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 lg:p-0 lg:border-0 dark:text-gray-400 dark:border-gray-700 hover:bg-gray-50 text-matisse-700 lg:hover:bg-transparent lg:hover:text-matisse-700 lg:dark:hover:text-matisse-700 lg:dark:hover:bg-transparent dark:hover:bg-gray-700 dark:hover:text-matisse-700">Company</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 lg:p-0 lg:border-0 dark:text-gray-400 dark:border-gray-700 hover:bg-gray-50 text-matisse-700 lg:hover:bg-transparent lg:hover:text-matisse-700 lg:dark:hover:text-matisse-700 lg:dark:hover:bg-transparent dark:hover:bg-gray-700 dark:hover:text-matisse-700">Marketplace</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 lg:p-0 lg:border-0 dark:text-gray-400 dark:border-gray-700 hover:bg-gray-50 text-matisse-700 lg:hover:bg-transparent lg:hover:text-matisse-700 lg:dark:hover:text-matisse-700 lg:dark:hover:bg-transparent dark:hover:bg-gray-700 dark:hover:text-matisse-700">Features</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 lg:p-0 lg:border-0 dark:text-gray-400 dark:border-gray-700 hover:bg-gray-50 text-matisse-700 lg:hover:bg-transparent lg:hover:text-matisse-700 lg:dark:hover:text-matisse-700 lg:dark:hover:bg-transparent dark:hover:bg-gray-700 dark:hover:text-matisse-700">Team</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 border-b border-gray-100 lg:p-0 lg:border-0 dark:text-gray-400 dark:border-gray-700 hover:bg-gray-50 text-matisse-700 lg:hover:bg-transparent lg:hover:text-matisse-700 lg:dark:hover:text-matisse-700 lg:dark:hover:bg-transparent dark:hover:bg-gray-700 dark:hover:text-matisse-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
