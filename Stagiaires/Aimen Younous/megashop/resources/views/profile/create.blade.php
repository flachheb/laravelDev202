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
        @if($errors->any())
            <x-alert type='danger'>
                <h6>Errors</h6>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </x-alert>
        @endif
        <h1>Ajouter Profile</h1>
        <form action={{route('store')}} method="POST">
            @csrf
            <label >Name :
            <input name="name" class="form-control" value="{{old('name')}}" type="text">
            @error('name')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </label><br>
            <label >Email :
            <input value="{{old('email')}}" name="email" type="email">
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </label><br>
            <label>Password :
            <input  name="password" type="password">
            @error('password')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </label><br>
            <label >validation de Password :
            <input  name="password_confirmation" type="password">
            @error('password_confirmation')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </label><br>
            
            <label >Bio :
                <textarea name="bio" id="" cols="30" rows="2">{{old('bio')}}</textarea>
            </label><br>
            <label >Image :
            <input  name="image" type="file">
            </label><br>
            <button class="btn" type="submit">Create</button>
        </form>
    </x-master>
</body>