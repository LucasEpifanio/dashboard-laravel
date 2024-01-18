<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('./storage/assets/styles/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('./storage/assets/styles/sidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('./storage/assets/styles/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('./storage/assets/styles/navbar-sidebar-medias-queries.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kumbh Sans:wght@400;500;600;700&display=swap" />
    <link rel="shortcut icon" href="{{ asset('./storage/assets/img/favicon.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/db74d9e1d4.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard</title>
    <style>
        body {
            background-color: #1C1A2E;
        }
    </style>

    @livewireStyles
    @livewireScripts
</head>

<body>
    <div class="dashboard">
        @include('./components/sidebar')
        <div class="dashboardcontent">
            @include('./components/navbar')

                @yield('main')

        </div>
    </div>
    <script src="./js/sidebar.js"></script>
    <script src="./js/sidebar2.js"></script>
    <script src="./js/navbar.js"></script>
</body>

</html>
