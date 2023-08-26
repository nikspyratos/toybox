<header x-data="{ open: false }" class="fixed w-full">
    <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/toybox-logo.png') }}" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-matisse-400">{{ config('app.name') }}</span>
            </a>
            <div class="flex items-center lg:order-2">
                @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-800 dark:text-matisse-400 hover:bg-gray-100 focus:ring-4 focus:ring-gray-500 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-white dark:text-matisse-400 hover:bg-gray-100 focus:ring-4 focus:ring-gray-500 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-white bg-matisse-500 hover:bg-matisse-800 focus:ring-4 focus:ring-matisse-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-matisse-600 dark:hover:bg-matisse-500 focus:outline-none dark:focus:ring-matisse-800">Register</a>
                            @endif
                        @endauth
                @endif
                <button @click="open = !open" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" :aria-expanded="open">
                    <span class="sr-only">Open main menu</span>
                    <x-heroicon-s-bars-3 class="w-6 h-6"></x-heroicon-s-bars-3>
                </button>
            </div>

            <div x-bind:class="{'hidden': !open }" class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-matisse-700 bg-matisse-500 rounded lg:bg-transparent lg:text-matisse-700 lg:p-0 dark:text-matisse-400" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-matisse-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-matisse-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-matisse-700 dark:hover:bg-gray-700 dark:hover:text-matisse-700 lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-matisse-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-matisse-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-matisse-700 dark:hover:bg-gray-700 dark:hover:text-matisse-700 lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-matisse-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-matisse-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-matisse-700 dark:hover:bg-gray-700 dark:hover:text-matisse-700 lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-matisse-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-matisse-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-matisse-700 dark:hover:bg-gray-700 dark:hover:text-matisse-700 lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-matisse-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-matisse-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-matisse-700 dark:hover:bg-gray-700 dark:hover:text-matisse-700 lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
