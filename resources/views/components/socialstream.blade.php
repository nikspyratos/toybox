<div class="mt-6 mb-2 space-y-6">
    @if(! empty(\JoelButcher\Socialstream\Socialstream::providers()))
        <div class="flex relative items-center">
            <div class="flex-grow border-t border-gray-400 dark:border-gray-500"></div>
            <span class="flex-shrink px-6 text-gray-400 dark:text-gray-500">
                {{ config('socialstream.prompt', 'Or Login Via') }}
            </span>
            <div class="flex-grow border-t border-gray-400 dark:border-gray-500"></div>
        </div>
    @endif

    <x-input-error :for="'socialstream'" class="text-center"/>

    <div class="grid gap-4">
        @foreach (\JoelButcher\Socialstream\Socialstream::providers() as $provider)
            <a class="flex gap-2 justify-center items-center py-2.5 w-full text-sm rounded-lg border border-gray-400 shadow-sm transition duration-200 hover:shadow-md"
               href='{{ route('oauth.redirect', $provider['id']) }}'>
                <x-socialstream-icons.provider-icon :provider="$provider['id']" class="w-6 h-6"/>
                <span class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ $provider['buttonLabel'] }}</span>
            </a>
        @endforeach
    </div>
</div>
