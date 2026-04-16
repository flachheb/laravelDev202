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
        <h1>Modifier Profile</h1>
        <form enctype="multipart/form-data" action={{route('profiles.update',$profile->id)}} method="POST" >
            @method('PUT')
            @csrf
            <label >Name :
            <input name="name" class="form-control" value="{{old('name',$profile->name)}}" type="text">
            @error('name')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </label><br>
            <label >Email :
            <input readonly class="bg-light" value="{{old('email',$profile->email)}}" name="email" type="email">
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </label><br>
            <label >Old Password :
            <input  name="password_old" type="password"> 
            @error('password_old')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </label><br>
            <label >New Password :
            <input  name="password_new" type="password"> 

            </label><br> 
            @error('password_new')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label >Confirmation Password : 
            <input  name="password_new_confirmation" type="password">
            @error('password_confirmation')
                <p class="text-danger">{{$message}}</p>
            @enderror
            
            <label >Bio :
                <textarea name="bio" id="" cols="30" rows="2">{{old('bio',$profile->bio)}}</textarea>
            </label><br>
            <label >Image :
            <div class="card-img" style="width: 10%">
                <img class=" card-img"  src="{{asset('storage/'.$profile->image)}}" alt="">
            </div>
            <input  name="image" value="{{old('image',$profile->image)}}" type="file">
            </label><br>
            <button class="btn" type="submit">Modifier</button>
        </form>
    </x-master>
</body>