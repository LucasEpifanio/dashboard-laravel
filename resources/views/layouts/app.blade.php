<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('./storage/assets/styles/global.css') }}" />
        <link rel="stylesheet" href="{{ asset('./storage/assets/styles/profile/navbar-profile.css') }}" />
        <link rel="stylesheet" href="{{ asset('./storage/assets/styles/profile/sidebar-profile.css') }}" />
        <link rel="stylesheet" href="{{ asset('./storage/assets/styles/navbar-sidebar-medias-queries.css') }}" />
        <link rel="stylesheet" href="{{ asset("./storage/assets/styles/profile/profile.css")}}">
        <title>{{ config('app.name', 'Dashboard') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Kumbh Sans:wght@400;500;600;700&display=swap" />
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
        <script src="https://kit.fontawesome.com/db74d9e1d4.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        @vite(['resources/js/app.js'])

    </head>
    <body>

        <div class="dashboard">
            @include('./components/sidebar-profile')
            <div class="dashboardcontent">

            @include('./components/navbar-profile')

            <main class="header-master">
                {{ $slot }}
            </main>
        </div>
        </div>
        <script src="./js/profile/modify-image.js"></script>
        <script src="./js/sidebar.js"></script>
    <script src="./js/sidebar2.js"></script>
    <script src="./js/navbar.js"></script>
    </body>
</html>
