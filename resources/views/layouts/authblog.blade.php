<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials._authblog-head')
</head>
<body>

    <!--<div id="app">-->
    @include('partials._authblog-navbar')


    <main class="py-4">
        @yield('content')
    </main>
    <!--</div>-->
    <!-- #app -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
