<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         @include('../css')

    <link rel="stylesheet" href="../css/style.css">
</head>
@props(['title'])
<body>
    <x-master :title="$title">
        {{$slot}}
    </x-master>
</body>
</html>
