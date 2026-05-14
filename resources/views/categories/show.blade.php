<h1>Produits dans la catégorie : {{ $category->name }}</h1>

<table border="1">
    <thead>
        <tr>
            <th>Nom du produit</th>
            <th>Prix</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }} DH</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">Aucun produit dans cette catégorie.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<br>
<a href="{{ route('categories.index') }}">Retour aux catégories</a>