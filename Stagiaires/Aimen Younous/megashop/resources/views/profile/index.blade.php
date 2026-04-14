<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <x-master title="Profiles - MegaShop">
        <a href={{route('create')}} class="btn">Create Profile</a>
        <div class="row my-5">
            @foreach($profiles as $profile)
               <x-profile-card :profile="$profile"/>
            @endforeach
        </div>
    {{$profiles->links()}}
    </x-master>
</body>
</html>