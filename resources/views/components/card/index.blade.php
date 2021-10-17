@php
    $isLink = $title->attributes->has('href');
@endphp

<div {{ $attributes }}>
    <div class="flex items-center">
        {{ $icon }}
        <div class="ml-4 text-lg leading-7 font-semibold">
            @if($title->attributes->has('href'))
                <a {{ $title->attributes }} class="underline text-gray-900 dark:text-white"
                   target="_blank" rel="noopener">
                    {{ $title }}
                </a>
            @else
                <p class="underline text-gray-900 dark:text-white">
                    {{ $title }}
                </p>
            @endif
        </div>
    </div>

    <div class="ml-12">
        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
            {{ $description }}
        </div>
    </div>
</div>
