<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/app.css" rel="stylesheet">
    {{-- <script src="/app.js"></script> --}}

    <!-- Alpine Plugins -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/morph@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine Core -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>

    {{-- {!! (new App\Livewire)->initialRender(App\Livewire\Counter2::class) !!} --}}
    @livewire(App\Livewire\Counter::class)
    {{-- <livewire:counter />

        @livewireScripts --}}
</body>

<script src="/livewire.js"></script>

</html>
