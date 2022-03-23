<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Rokad-Bahi') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="assets/css/app.min.css">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/components.css">
        <!-- Custom style CSS -->
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

          <!-- General JS Scripts -->
        <script src="assets/js/app.min.js"></script>
        <!-- JS Libraies -->
        <!-- Page Specific JS File -->
        <!-- Template JS File -->
        <script src="assets/js/scripts.js"></script>
        <!-- Custom JS File -->
        <script src="assets/js/custom.js"></script>


    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
