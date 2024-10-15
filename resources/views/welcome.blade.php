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

    {!! livewire(App\Livewire\Counter2::class) !!}
    {{-- <livewire:counter />

    @livewireScripts --}}
</body>

</html>

<?php
function livewire($class)
{
    $component = new $class();

    return Blade::render($component->render(), getProperties($component));
}

function getProperties($component)
{
    $properties = [];
    $reflectedProperties = (new ReflectionClass($component))->getProperties(ReflectionProperty::IS_PUBLIC);

    foreach ($reflectedProperties as $property) {
        $properties[$property->getName()] = $property->getValue($component);
    }
    return $properties;
}
