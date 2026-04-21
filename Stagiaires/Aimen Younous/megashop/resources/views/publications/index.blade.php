<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-master title="Publications - MegaShop">
    
    @foreach ($publications as $publication)
        <x-publications :canUpdate="auth()->check() && auth()->user()->id===$publication->profile_id" :publication="$publication"/>
    @endforeach
    </x-master>
</body>
</html>