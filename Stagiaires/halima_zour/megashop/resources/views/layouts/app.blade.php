<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MegaShop - @yield('title')</title>
</head>
<body>
    <header>
        <h1>MegaShop</h1>
        <nav>
            <a href="/">Accueil</a> |
            <a href="/categorie/informatique">Informatique</a> |
            <a href="/categorie/petit-electromenager">Petit Électroménager</a> |
            <a href="/categorie/grand-electromenager">Grand Électroménager</a> |
            <a href="/contact">Contact</a> |
            <a href="/cgv">CGV</a>
        </nav>
    </header>

    <hr>

    @yield('content')

    <hr>
    <footer>
        <p>MegaShop © 2026</p>
    </footer>
</body>
</html>