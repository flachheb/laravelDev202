<div class="col-sm-3">
    <div class="card">
        <img class="card-img" src={{$profile->image}}/>
        <div class="card-body">
            <h4 class="card-title">{{$profile->name}}</h4>
            <p class="card-text">{{$profile->email}}</p>
            <p class="card-text">{{Str::limit($profile->bio,40) }}</p>
        </div>
        <a href={{route('profiles.show',$profile->id)}} class="btn stretched-link">show detail</a>
    </div>
</div>