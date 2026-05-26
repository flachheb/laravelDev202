<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <x-master title="Login - MegaShop">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <label >
                email :
                <input type="email" value="{{old('email')}}" name="email"/>
            </label><br>
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <label >
                password :
                <input type="password" name="password"/>
            </label><br>
            <button class="btn ">Se connecter</button>
        </form>
    </x-master>
</body>
</html>