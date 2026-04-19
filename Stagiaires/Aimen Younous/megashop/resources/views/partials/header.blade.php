    <header>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
                <ul>
                    <li><a href={{route('accueil')}}>Accueil</a></li>
                    @guest
                    <li><a href={{route('login.show')}}>Login</a></li>
                    @endguest
                    <li><a href={{route('profiles.index')}}>Profiles</a></li>
                    <li><a href={{route('categories','informatique')}}>Informatique</a></li>
                    <li><a href={{route('cgv')}}>CGV</a></li>
                    <li><a href={{route('contact')}}>Contact</a></li>
                    @auth
                    <li class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" 
                            type="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false">
                            
                            {{auth()->user()->name}}
                        </button>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('login.logout')}}">Deconnexion</a></li>
                            <li><a class="dropdown-item" href="#">Action ...</a></li>
                        </ul>
                    </li>
                    @endauth
                    <li class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" 
                            type="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false">
                            
                            Publications
                        </button>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('publications.index')}}">publications</a></li>
                            @auth
                            <li><a class="dropdown-item" href="{{route('publications.create')}}">create</a></li>
                            @endauth
                        </ul>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>