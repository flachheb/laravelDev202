@if(request()->segment(1))
    <div class="breadcrumb">
        <a href="/">Accueil</a>
        @if(request()->segment(1) == 'categories')
            / <a href="#">{{ ucfirst(str_replace('-', ' ', request()->segment(2))) }}</a>
        @elseif(request()->segment(1) == 'produit')
            / <a href="#">Produit {{ request()->segment(2) }}</a>
        @endif
    </div>
@endif
<nav>
    <a href="/">Accueil</a>
    <a href="/categories/informatique">Informatique</a>
    <a href="/categories/petit-electromenager">Petit électroménager</a>
    <a href="/categories/grand-electromenager">Grand électroménager</a>
    <a href="/contact">Contact</a>
</nav>