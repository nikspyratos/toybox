<header x-data="{ open: false }" class="fixed w-full">
    <nav class="py-2.5 bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center px-4 mx-auto max-w-screen-xl">
            <a class="flex items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/toybox-logo.png') }}" class="mr-3 h-6 sm:h-9" alt="Toybox Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-matisse-400">{{ config('app.name') }}</span>
            </a>
            @if($includeNav ?? true)
            <div class="flex items-center lg:order-2">
                @if (Route::has('login'))
                    @auth
                        <a class="cta" href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a class="cta" href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a class="cta" href="{{ route('register') }}">Register</a>
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
                    @php
                        $navigationRouteNames = [
                            'home' => 'Home',
                            'blog-posts.index' => 'Blog',
                            'docs.index' => 'Docs',
                        ];
                    @endphp
                    @foreach ($navigationRouteNames as $navigationRouteName => $title)
                        <li>
                            <a href="{{ route($navigationRouteName) }}"
                               @class([
                                    'active' => request()->route()->getName() === $navigationRouteName,
                                    'inactive' => request()->route()->getName() !== $navigationRouteName
                                ])>
                                {{ $title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
           @endif
        </div>
    </nav>
</header>
