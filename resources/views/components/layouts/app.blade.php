<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Formulario de contacto en Laravel 9 y Livewire</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('vendor\bootstrap\css\bootstrap.min.css') }}">
    @livewireStyles
</head>

<body>
{{$slot}}
<script src="{{ asset('vendor\bootstrap\js\bootstrap.bundle.min.js') }}"></script>
@livewireScripts
</body>

</html>
