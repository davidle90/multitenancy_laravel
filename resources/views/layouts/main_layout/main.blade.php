<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- toastr -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @yield('styles')
        @stack('styles')
    </head>
    <body class="d-flex flex-column min-vh-100">

        @yield('modals')

        <!-- Main -->
        <main class="d-flex vh-100">
            <!-- Sidebar -->
            @include('layouts.main_layout.navbar')

            <!-- Content Area -->
            <div class="flex-grow-1 d-flex flex-column">
                <div class="p-4 bg-light">
                    @include('layouts.main_layout.header')
                </div>
                <div class="container-fluid flex-grow-1 py-3 overflow-auto">
                    @yield('content')
                </div>
            </div>
        </main>

        @yield('scripts')
        @stack('scripts')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @if(Session::has('action_message'))
            <script>
                toastr.options = {
                    'progressBar': true,
                    'closeButton': true,
                }

                toastr.success('{{ Session::get('action_message') }}', 'Success', {timeOut: 6000});
                // toastr.info('{{ Session::get('message') }}');
                // toastr.warning('{{ Session::get('message') }}');
                // toastr.error('{{ Session::get('message') }}');
            </script>
            {{ Session::forget('action_message') }}
        @endif
    </body>
</html>
