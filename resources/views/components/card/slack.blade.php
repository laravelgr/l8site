<x-card {{ $attributes }}>
    <x-slot name="icon">
        <x-tabler-brand-slack class="w-8 h-8 text-gray-500"/>
    </x-slot>

    <x-slot name="title" href="http://slack.laravel.gr/">
        Slack
    </x-slot>

    <x-slot name="description">
        Feel free to join us on Slack! You will find a cool community, we mainly focus in PHP
        and
        the use of Laravel framework but we are open to all related frameworks/technologies.
    </x-slot>
</x-card>
