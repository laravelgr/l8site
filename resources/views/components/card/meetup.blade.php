<x-card {{ $attributes }}>
    <x-slot name="icon">
        <x-heroicon-o-globe class="w-8 h-8 text-gray-500"/>
    </x-slot>

    <x-slot name="title" href="https://www.meetup.com/athens-laravel-meetup">
        Meetup
    </x-slot>

    <x-slot name="description">
        Athens Laravel Meetup is a group for anyone interested in web development. We mainly
        focus
        in PHP and the use of Laravel framework but we are open to all related
        frameworks/technologies.
    </x-slot>
</x-card>
