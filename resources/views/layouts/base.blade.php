<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>Laravel Greece</title>
    <meta name="title" content="Laravel Greece">
    <meta name="description" content="The Greek Community of Laravel. Here you will find everything you need for the most popular web framework.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Laravel Greece">
    <meta property="og:description" content="The Greek Community of Laravel. Here you will find everything you need for the most popular web framework.">
    <meta property="og:image" content="{{ secure_asset('socialcard.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Laravel Greece">
    <meta property="twitter:description" content="Η Ελληνική κοινότητα του Laravel. Εδώ θα βρείς ότι χρειάζεται να γνωρίζεις για το πιο δυνατό framework σε PHP">
    <meta property="twitter:image" content="{{ secure_asset('socialcard.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"></noscript>

    @vite
</head>
<body class="antialiased font-nunito">
    @yield('content')

</body>
</html>
