<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/main.css">
        {{-- <script src="assets/js/main.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    </head>
    <body>
        @include('_components.navbar')
        @yield('body')
    </body>
</html>
