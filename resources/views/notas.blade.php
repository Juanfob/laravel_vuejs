<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel y Vue</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
</head>
<body>
<div id="app" class="container">
    <h1> Notas </h1>
    <div style="width:500px; padding:3px;">

        <div style="width:245px; background:#FFCC00; float:left;"><notas></notas></div>
        <div style="width:245px; background:#CCFF66; float:right;"><notas></notas></div>

    </div>
    <notas></notas>
</div>
<input type="hidden" id="csrf_token" value="{{ csrf_token() }}" />
<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
