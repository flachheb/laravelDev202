<div class="col-sm-4">
    <div class="card my-3" >
        <img style="max-height: 200px"  class=" card-img" src="{{asset('storage/'.$profile->image)}}"/>
        <div class="card-body">
            <h4 class="card-title">{{$profile->name}}</h4>
            <p class="card-text">{{$profile->email}}</p>
            <p class="card-text">{{Str::limit($profile->bio,40) }}</p>
            <a href={{route('profiles.show',$profile->id)}} class="stretched-link"></a>
        </div>
        <div class="card-foot border-top px-3 py-3 bg-light " style="z-index: 9">
            <a href={{route('profiles.edit',$profile->id)}} class="btn float-start">Modifier</a>
            <form action="{{route('profiles.destroy',$profile->id)}}" method="POST" >
                @method('DELETE')
                @csrf
                <button class="btn btn-danger float-end">Supprimer</button>
            </form>
        </div>
    </div>
</div>