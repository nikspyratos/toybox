<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:col-span-2 md:mt-0">
        <div class="py-5 px-4 bg-white shadow sm:p-6 sm:rounded-lg dark:bg-gray-800">
            {{ $content }}
        </div>
    </div>
</div>
