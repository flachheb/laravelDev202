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
    
    <main class="container">
        <div class="row my-3">
            @include('partials.flashbag')
        </div>
        {{$slot}}
    </main>
    @include("../partials/footer")
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>