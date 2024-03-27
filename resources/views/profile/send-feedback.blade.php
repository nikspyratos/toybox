<x-form-section submit="sendFeedback">
    <x-slot name="title">
        {{ __('Feedback') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Any feedback is appreciated!') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="feedback" value="{{ __('Feedback') }}" />
            <x-textarea id="feedback" class="block mt-1 w-full h-20" wire:model="feedback" required />
            <x-input-error for="feedback" class="mt-2" />
            <label class="flex items-center mt-2">
                <x-checkbox wire:model="consentTestimonial" :value="$consentTestimonial"/>
                <span class="text-sm text-gray-600 dark:text-gray-400 ms-2">{{ __('Consent to posting as testimonial? (May involve slight editing)') }}</span>
            </label>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="sent">
            {{ __('Sent!') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Send') }}
        </x-button>
    </x-slot>
</x-form-section>
