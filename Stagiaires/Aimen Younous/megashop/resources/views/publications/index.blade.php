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
        <div class="card bg-light my-2">
            <div class="card-body">
                <div class=" w-100 float-right">
                    <a class="w-30 btn btn-primary float-right btn-sm" href="{{route('publications.edit',$publication->id)}}">Modifier</a>
                    <form action="{{route('publications.destroy',$publication->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class=" w-30 btn btn-danger float-right btn-sm"  onclick="confirm('voulez vous vraiment supprimer cette publication')">Delete</button>
                    </form>
                </div>
                <blockquote class="blockquote mb-0">
                    <h3>{{$publication->titre}}</h3>
                    <p>{{$publication->body}}</p>
                    @if(!is_null($publication->image))
                        <footer class=" w-30 blockquote-footer">
                            <img width="30%" class="w-40 img-fluid" src="{{asset('storage/'.$publication->image)}}" alt="image">
                        </footer>                    
                    @endif
                </blockquote>
            </div>
        </div>
    @endforeach
    </x-master>
</body>
</html>