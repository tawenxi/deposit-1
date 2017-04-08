<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@section('title') {{ config('app.name', 'Laravel') }} @show</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('styles')

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>

    <div id="app">
        @yield('content')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')

</body>
</html>
