@extends('layouts.base')

@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:pt-2">
                <x-logo class="h-40 w-auto"></x-logo>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="divide-y divide-gray-200">
                    <div class="grid grid-cols-1 lg:grid-cols-2 divide-x divide-y lg:divide-y-0 divide-gray-200">
                        <!-- Slack Card -->
                        <x-card.slack class="p-6"></x-card.slack>

                        <!-- Twitter Card -->
                        <x-card.twitter class="p-6"></x-card.twitter>
                    </div>


                    <div class="grid grid-cols-1 lg:grid-cols-2 divide-x divide-y lg:divide-y-0 divide-gray-200">
                        <!-- Facebook Card -->
                        <x-card.facebook class="p-6"></x-card.facebook>

                        <!-- YouTube Card -->
                        <x-card.youtube class="p-6"></x-card.youtube>
                    </div>

                    <!-- Meetup Card -->
                    <x-card.meetup class="p-6"></x-card.meetup>

                    <!-- Newsletter -->
                    <x-card.newsletter class="p-6"></x-card.newsletter>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex flex-col lg:flex-row justify-center mt-6 sm:items-center sm:justify-between">
                <div class="lg:text-center text-sm text-gray-500 mx-auto lg:mx-0 sm:text-left">
                    <div class="flex text-center lg:flex-row flex-col lg:items-center lg:space-y-0 space-y-4">
                        <div>
                            <x-fab-laravel class="-mt-px w-5 h-5 text-gray-400 inline-flex"/>
                            <a href="https://laravel.com/" class="ml-1 underline" target="_blank" rel="noopener">
                                Laravel
                            </a>
                        </div>

                        <div>
                            <x-heroicon-o-annotation class="lg:ml-4 -mt-px w-5 h-5 text-gray-400 inline-flex"/>
                            <a href="https://laravel-news.com/" class="ml-1 underline" target="_blank"
                               rel="noopener">
                                Laravel News
                            </a>
                        </div>

                        <div>
                            <x-heroicon-o-camera class="lg:ml-4 -mt-px w-5 h-5 text-gray-400 inline-flex"/>
                            <a href="https://laracasts.com/" class="ml-1 underline" target="_blank" rel="noopener">
                                Laracasts
                            </a>
                        </div>

                        <div>
                            <x-heroicon-o-shopping-cart class="lg:ml-4 -mt-px w-5 h-5 text-gray-400 inline-flex"/>
                            <a href="https://laravel.bigcartel.com" class="ml-1 underline" target="_blank"
                               rel="noopener">
                                Shop
                            </a>
                        </div>

                        <div>
                            <x-meetup-worldwide-logo class="lg:ml-4 -mt-px w-5 h-5 text-gray-400 inline-flex"/>
                            <a href="https://meetup.laravel.com/" class="ml-1 underline" target="_blank"
                               rel="noopener">
                                Laravel Worldwide Meetup
                            </a>
                        </div>

                    </div>
                </div>
                <div class="lg:ml-4 mt-6 lg:mt-0 lg:py-0 py-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    We
                    <x-heroicon-s-heart class="-mt-1 w-4 h-4 text-pink-500 inline-flex"/>
                    <a href="https://laravel.com" class="ml-1 underline" target="_blank" rel="noopener">
                        Laravel Framework
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
