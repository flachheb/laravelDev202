<!DOCTYPE html>
<html lang="en">
@props(["title"])
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'Accueil'}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    
<body>
    @include("../partials/header")
    
    <main>
        {{$slot}}
    </main>
    @include("../partials/footer")
</body>
</html>