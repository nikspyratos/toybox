<footer class="">
    <div class="p-4 pb-6 max-w-screen-xl md:px-8 lg:pb-16 lg:x-10">
        <hr class="my-6 sm:mx-auto lg:my-8 border-voodoo-200 dark:border-voodoo-700">
        <div class="flex flex-col mx-auto text-center md:flex-row md:justify-around md:w-3/4 md:text-left">
            <div>
                <h3 class="mb-6 text-sm font-semibold uppercase dark:text-white text-voodoo-900">Company</h3>
                <ul class="list-none">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('blog-posts.index') }}">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('contact-us') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold uppercase dark:text-white text-voodoo-900">Legal</h3>
                <ul class="list-none">
                    <li>
                        <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="{{ route('terms') }}">Terms</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold uppercase dark:text-white text-voodoo-900">{{ config('app.name') }}</h3>
                <ul class="list-none">
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}">Log in</a>
                        </li>

                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                    <li>
                        <a href="#">
                            Made by {you}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-6 sm:mx-auto lg:my-8 border-voodoo-200 dark:border-voodoo-700">
        <div class="text-center">
            <span class="block text-sm text-center text-buttercup-500 dark:text-buttercup-400">MIT License</span>
        </div>
    </div>
</footer>
