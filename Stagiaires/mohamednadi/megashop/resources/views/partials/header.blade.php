<header>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
                <ul>
                        <li><a href="/">Accueil</a></li>
                        <li><a href="{{ route('category', ['slug' => 'informatique']) }}">Informatique</a></li>
                        <li><a href="{{ route('category', ['slug' => 'petit-electromenager']) }}">Petit Électroménager</a></li>
                        <li><a href="{{ route('category', ['slug' => 'grand-electromenager']) }}">Grand Électroménager</a></li>
                        <li><a href="/contact">Contact</a></li>
            </ul>
            </nav>
        </div>
    </header>