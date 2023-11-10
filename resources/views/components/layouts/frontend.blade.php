<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="title" content="{{ $title }}">
    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords"
        content="smpn2, paguyangan, smp terbaik, smpn, smp negri, ppdb smpn2, smp negeri 2 paguyangan, negri, smp">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <title>{{ $title }}</title>

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://smpn2.xrafff.my.id/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description ?? '' }}">
    <meta property="og:image" content="https://foto.data.kemdikbud.go.id/getImage/20338383/3.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="smpn2.xrafff.my.id">
    <meta property="twitter:url" content="https://smpn2.xrafff.my.id/">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description ?? '' }}">
    <meta name="twitter:image" content="https://foto.data.kemdikbud.go.id/getImage/20338383/3.jpg">


    <link rel="shortcut icon" href="{{ asset(getWebConfiguration()->logo) }}" type="image/x-icon">

    <style>
        :root {
            --primary: {{ getWebConfiguration()->theme_color }};
        }
    </style>
    <link rel="stylesheet" href="{{ asset('frontend/css/app.css') }}?v={{ uniqid() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}?v={{ uniqid() }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    @stack('plugin-styles')

    @stack('styles')

</head>

<body>

    <x-frontend.navbar />

    {{ $slot }}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('frontend/js/app.js') }}?v={{ uniqid() }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}?v={{ uniqid() }}"></script>

    @stack('plugin-scripts')

    @stack('custom-scripts')

</body>

</html>
