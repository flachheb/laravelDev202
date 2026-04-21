        <div class="card bg-light my-2">
            <div class="card-body">
                @auth
                        <div class="container">
                            <div class="row ">
                                <div class="col-md-5 align-items-center
                                justify-content-center">
                                    <img class="rounded-circle" width="70" src="{{asset('storage/'.$publication->profile?->image)}}" alt="image">
                                    <p>{{$publication->profile?->name}}</p>
                                    <p>{{$publication->profile?->created_at}}</p>
                                    <a href="{{route('profiles.show',$publication->profile->id)}}" class="stretched-link"></a>
                                </div>
                                <div class="col-md-5">
                                    <h3>{{$publication->titre}}</h3>

                                </div>
                                <div class="col-md-2">
                                    @if($canUpdate)
                                        <div class=" row w-100 float-right">
                                            <div class="col-md-6">
                                                <a class="w-30 btn btn-primary float-right btn-sm" href="{{route('publications.edit',$publication->id)}}">Modifier</a>
                                            </div>
                                            <div class="col-md-6">
                                                <form action="{{route('publications.destroy',$publication->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class=" w-30 btn btn-danger float-right btn-sm"  onclick="confirm('voulez vous vraiment supprimer cette publication')">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    @endif                                    
                                </div>
                            </div>
                        </div>
                        <hr>
                @endauth
                <blockquote class="blockquote mb-0">
                    <p>{{$publication->body}}</p>
                    @if(!is_null($publication->image))
                        <footer class=" w-30 blockquote-footer">
                            <img width="30%" class="w-40 img-fluid" src="{{asset('storage/'.$publication->image)}}" alt="image">
                        </footer>                    
                    @endif
                </blockquote>
            </div>
        </div>