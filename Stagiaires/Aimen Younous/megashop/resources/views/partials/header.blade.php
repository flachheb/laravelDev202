    <header>
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
                    <li><a href={{route('categories',"petit-electromenager")}}>Petit Électroménager</a></li>
                    <li><a href={{route('categories',"grand-electromenager")}}>Grand Électroménager</a></li>
                    <li><a href={{route('cgv')}}>CGV</a></li>
                    <li><a href={{route('contact')}}>Contact</a></li>
                    @auth
                        <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{auth()->user()->name}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('login.logout')}}">Deconexion</a>
                            <a class="dropdown-item " href="#">action ...</a>
                            <a class="dropdown-item" href="#">action ...</a>
                        </div>
                        </div>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>