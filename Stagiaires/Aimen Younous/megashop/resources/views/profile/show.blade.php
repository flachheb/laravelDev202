<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-master title="Show Profile - MegaShop">
        <div class=" card m-1">
            <div class="card-img">
                <img src={{$profile->image}} alt="">
            </div>
            <div class="card-body">
                <p class="card-text">id : {{$profile->id}}</p>
                <h1 class="card-title">name : {{$profile->name}}</h1>
                <h4 class="card-text">email : {{$profile->email}}</h4>
                <h3 class="card-text">{{$profile->bio}}</h3>
            </div>
        </div> 
        <a class="btn stretched-link" href={{route('profile.index')}}>Retour</a>
    </x-master>
</body>
</html>