<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/app.css" rel="stylesheet">
    {{-- <script src="/app.js"></script> --}}
</head>

<body>

    {{-- {!! (new App\Livewire)->initialRender(App\Livewire\Counter2::class) !!} --}}
    @livewire(App\Livewire\Counter::class)
    {{-- <livewire:counter />

    @livewireScripts --}}
</body>

<script>
    document.querySelectorAll('[wire\\:snapshot]').forEach(el => {
        let snapshot = JSON.parse(el.getAttribute('wire:snapshot'));
        console.log(snapshot);
    });
</script>

</html>
