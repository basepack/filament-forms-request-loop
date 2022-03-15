<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    <script src="{{ asset('js/app.js') }}" defer></script>

    @stack('styles')
</head>
<body class="font-sans antialiased">

    <div class="max-w-sm">
        @livewire('filament-forms-request-loop')
    </div>

    @livewireScripts

    @stack('scripts')
</body>
</html>
