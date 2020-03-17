<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{ asset('css/lobby-wars.css') }}" type="text/css" media="screen" />

    <!-- JS settings -->
    <script type="application/json" data-settings-selector="settings-json">
        {!! json_encode([
            'base_url' => url('/'),
            'api_url' => url('/api/v1')
        ]) !!}
    </script>

</head>

<body>

    <!-- STARTING POINT -->
    <div id="app">
        <lobby-wars-component></lobby-wars-component>
    </div>

<script src="{{ asset('js/lobby-wars.js') }}"></script>
</body>
</html>