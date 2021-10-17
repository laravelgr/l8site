<x-card {{ $attributes }}>
    <x-slot name="icon">
        <x-heroicon-o-mail class="w-8 h-8 -mt-1 text-gray-500"/>
    </x-slot>

    <x-slot name="title">Subscribe to our Newsletter!</x-slot>

    <x-slot name="description">
        <x-newsletter-form></x-newsletter-form>
    </x-slot>
</x-card>
