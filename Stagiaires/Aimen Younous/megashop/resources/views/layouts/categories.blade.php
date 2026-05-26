<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatique - MegaShop</title>
         @include('../css')

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    @extends('layouts.master')
    @section('aimen')
        @yield('categories')
    @endsection
</body>
</html>
