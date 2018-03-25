<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpot" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'LaraBBS') - {{ setting('site_name', 'Practice with Laravel')}}</title>
        <meta name="description" content="@yield('description', setting('seo_description', 'LaraBBS forum'))" />
        <meta name="keyword" content="@yield('keyword', setting('seo_keyword', 'LaraBBS'))" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('styles')
    </head>
    <body>
        <div id="app" class="{{ route_class() }}-page">
            @include('layouts._header')

            <div class="container">

                @include('layouts._message')
                @yield('content')

            </div>

            @include('layouts._footer')

        </div>

        @if (app()->isLocal())
            @include('sudosu::user-selector')
        @endif
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')


    </body>
</html>
