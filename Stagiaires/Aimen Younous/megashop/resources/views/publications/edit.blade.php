<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  
</head>
<body>
    <x-master title="Publications - MegaShop">
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
        <h1>Modifier Publication</h1>
        <form action={{route('publications.update',$publication->id)}} method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label >Titre :
            <input name="titre" class="form-control" value="{{old('titre',$publication->titre)}}" type="text">
            @error('titre')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </label><br>
            
            <label >Body :
                <textarea name="body" id="" cols="30" rows="2">{{old('body',$publication->body)}}</textarea>
            </label><br>
            <label >Image :
            <div >
                <img style="width: 40%" class="m-2 w-1" src="{{asset('storage/'.$publication->image)}}" alt="">
            </div>
            <input  name="image" type="file">
            </label><br>
            <button class="btn" type="submit">Update</button>
        </form>
    </x-master>
</body>