@extends('layouts.base')

@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:pt-2">
                <x-logo class="h-40 w-auto text-gray-700"></x-logo>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <!-- Slack Card -->
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 lg:border-r">
                        <div class="flex items-center">
                            <x-tabler-brand-slack class="w-8 h-8 text-gray-500"/>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="http://slack.laravel.gr/" class="underline text-gray-900 dark:text-white"
                                   target="_blank" rel="noopener">
                                    Slack
                                </a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Feel free to join us on Slack! You will find a cool community, we mainly focus in PHP
                                and
                                the use of Laravel framework but we are open to all related frameworks/technologies.
                            </div>
                        </div>
                    </div>

                    <!-- Twitter Card -->
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <x-tabler-brand-twitter class="w-8 h-8 text-gray-500"/>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://twitter.com/laravelgr" class="underline text-gray-900 dark:text-white"
                                   target="_blank" rel="noopener">
                                    Twitter
                                </a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Checkout out our Twitter account to get the latest news around our community and the
                                Laravel
                                Ecosystem.
                            </div>
                        </div>
                    </div>

                    <!-- Facebook Card -->
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 lg:border-r">
                        <div class="flex items-center">
                            <x-tabler-brand-facebook class="w-8 h-8 text-gray-500"/>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://www.facebook.com/laravelgr"
                                   class="underline text-gray-900 dark:text-white"
                                   target="_blank" rel="noopener">
                                    Facebook
                                </a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Checkout out our Facebook page to get the latest news around our community and the
                                Laravel
                                Ecosystem.
                            </div>
                        </div>
                    </div>

                    <!-- YouTube Card -->
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <x-fab-youtube class="w-8 h-8 text-gray-500"/>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://www.youtube.com/channel/UCXgd0om3ZNufW8GocLUH23Q/videos"
                                   class="underline text-gray-900 dark:text-white"
                                   target="_blank" rel="noopener">
                                    YouTube
                                </a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                We also have a YouTube channel, make sure you take a look!
                            </div>
                        </div>
                    </div>

                    <!-- Meetup Card -->
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 lg:col-span-2">
                        <div class="flex items-center">
                            <x-heroicon-o-globe class="w-8 h-8 text-gray-500"/>

                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="https://www.meetup.com/athens-laravel-meetup"
                                   class="underline text-gray-900 dark:text-white"
                                   target="_blank" rel="noopener">
                                    Meetup
                                </a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Athens Laravel Meetup is a group for anyone interested in web development. We mainly
                                focus
                                in PHP and the use of Laravel framework but we are open to all related
                                frameworks/technologies.
                            </div>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 lg:col-span-2">
                        <div class="flex">
                            <x-heroicon-o-mail class="w-8 h-8 -mt-1 text-gray-500"/>
                            <div class="ml-4 text-lg leading-7 font-semibold w-full">
                                <p class="text-gray-800">Subscribe to our Newsletter!</p>
                                <x-newsletter-form></x-newsletter-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex flex-col lg:flex-row justify-center mt-6 sm:items-center sm:justify-between">
                <div class="lg:text-center text-sm text-gray-500 mx-auto lg:mx-0 sm:text-left">
                    <div class="flex lg:flex-row flex-col lg:items-center lg:space-y-0 space-y-4">
                        <div>
                            <x-fab-laravel class="-mt-px w-5 h-5 text-gray-400 inline-flex"/>
                            <a href="https://laravel.com" class="ml-1 underline" target="_blank" rel="noopener">
                                Laravel
                            </a>
                        </div>

                        <div>
                            <x-heroicon-o-annotation class="lg:ml-4 -mt-px w-5 h-5 text-gray-400 inline-flex"/>
                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline" target="_blank"
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
