<div class="fixed inset-x-0 bottom-0 pb-2 js-cookie-consent cookie-consent">
    <div class="px-6 mx-auto max-w-7xl">
        <div class="p-2 rounded-lg bg-buttercup-100">
            <div class="flex flex-wrap justify-between items-center">
                <div class="hidden flex-1 items-center w-0 md:inline">
                    <p class="ml-3 text-black cookie-consent__message">
                        {{ __('This website uses only essential cookies for functionality.') }}
                    </p>
                </div>
                <div class="flex-shrink-0 mt-2 w-full sm:mt-0 sm:w-auto">
                    <button class="flex justify-center items-center py-2 px-4 text-sm font-medium text-yellow-800 bg-yellow-400 rounded-md cursor-pointer hover:bg-yellow-300 js-cookie-consent-agree cookie-consent__agree">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
