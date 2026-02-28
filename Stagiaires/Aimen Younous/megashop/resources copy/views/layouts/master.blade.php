<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"></head> -->
    
<body>
    @include("../partials/header")
    
    <main>
        @yield('aimen')
    </main>
    @include("../partials/footer")
</body>
</html>