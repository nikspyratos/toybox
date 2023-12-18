<footer class="bg-white dark:bg-gray-900">
    <div class="p-4 pb-6 max-w-screen-xl md:px-8 lg:pb-16 lg:x-10">
        <hr class="my-6 sm:mx-auto lg:my-8 border-voodoo-200 dark:border-voodoo-700">
        <div class="flex justify-around mx-auto w-3/4">
            <div>
                <h3 class="mb-6 text-sm font-semibold uppercase dark:text-white text-voodoo-900">Company</h3>
                <ul class="dark:text-gray-300 text-voodoo-500">
                    <li class="mb-4">
                        <a href="{{ route('landing') }}" class="hover:underline dark:hover:text-matisse-600 hover:text-matisse-600">Home</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('blog-posts.index') }}" class="hover:underline dark:hover:text-matisse-600 hover:text-matisse-600">Blog</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('contact-us') }}" class="hover:underline dark:hover:text-matisse-600 hover:text-matisse-600">Contact</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold uppercase dark:text-white text-voodoo-900">Legal</h3>
                <ul class="dark:text-gray-300 text-voodoo-500">
                    <li class="mb-4">
                        <a href="{{ route('privacy-policy') }}" class="hover:underline dark:hover:text-matisse-600 hover:text-matisse-600">Privacy Policy</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('terms') }}" class="hover:underline dark:hover:text-matisse-600 hover:text-matisse-600">Terms</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold uppercase dark:text-white text-voodoo-900">{{ config('app.name') }}</h3>
                <ul class="dark:text-gray-300 text-voodoo-500">
                    @auth
                        <li class="mb-4">
                            <a href="{{ url('/dashboard') }}" class="hover:underline dark:hover:text-matisse-600 hover:text-matisse-600">Dashboard</a>
                        </li>
                    @else
                        <li class="mb-4">
                            <a href="{{ route('login') }}" class="hover:underline dark:hover:text-matisse-600 hover:text-matisse-600">Log in</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="mb-4">
                                <a href="{{ route('register') }}" class="hover:underline dark:hover:text-matisse-600 hover:text-matisse-600">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
        <hr class="my-6 sm:mx-auto lg:my-8 border-voodoo-200 dark:border-voodoo-700">
        <div class="text-center">
            <a href="#" class="flex justify-center items-center mb-5 text-2xl font-semibold dark:text-white text-voodoo-900">
                <img src="{{ asset('images/toybox-logo.png') }}" class="mr-3 h-6 sm:h-9" alt="Toybox Logo" />
                Toybox
            </a>
            <span class="block text-sm text-center text-voodoo-500 dark:text-voodoo-400">MIT License.
            </span>
            <div class="flex justify-center mt-5 space-x-5">
                <div class="text-sm text-center sm:text-left text-matisse-500 dark:text-matisse-400">
                    <div class="flex gap-4 items-center">
                        <a href="https://tip-jar.co.za/@thecapegreek" class="inline-flex items-center focus:rounded-sm group dark:hover:text-matisse-400 hover:text-matisse-700 focus:outline focus:outline-2 focus:outline-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="mr-1 -mt-px w-5 h-5 stroke-matisse-400 dark:stroke-matisse-600 dark:group-hover:stroke-matisse-400 group-hover:stroke-matisse-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Sponsor
                        </a>
                    </div>
                </div>

                <a class="text-sm text-center sm:text-left text-matisse-500 dark:text-matisse-400" href="https://nikspyratos.com">
                    <x-heroicon-o-link
                        class="inline mr-1 -mt-px w-5 h-5 stroke-matisse-400 dark:stroke-matisse-600 dark:group-hover:stroke-matisse-400 group-hover:stroke-matisse-600"
                    ></x-heroicon-o-link>
                    Made by Nik Spyratos
                </a>
            </div>
            <ul class="flex justify-center mt-5 space-x-5">
                <li>
                    <a href="#" class="text-voodoo-500 dark:hover:text-white dark:text-voodoo-400 hover:text-voodoo-900">
                        <x-heroicon-o-face-smile class="w-5 h-5"></x-heroicon-o-face-smile>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-voodoo-500 dark:hover:text-white dark:text-voodoo-400 hover:text-voodoo-900">
                        <x-heroicon-o-face-frown class="w-5 h-5"></x-heroicon-o-face-frown>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-voodoo-500 dark:hover:text-white dark:text-voodoo-400 hover:text-voodoo-900">
                        <x-heroicon-o-magnifying-glass-circle class="w-5 h-5"></x-heroicon-o-magnifying-glass-circle>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-voodoo-500 dark:hover:text-white dark:text-voodoo-400 hover:text-voodoo-900">
                        <x-heroicon-o-information-circle class="w-5 h-5"></x-heroicon-o-information-circle>
                    </a>
                </li>
                <li>
                    <a href="#" class="text-voodoo-500 dark:hover:text-white dark:text-voodoo-400 hover:text-voodoo-900">
                        <x-heroicon-o-plus-circle class="w-5 h-5"></x-heroicon-o-plus-circle>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
