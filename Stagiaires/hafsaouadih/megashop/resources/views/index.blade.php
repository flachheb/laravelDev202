<h3>Produits en vedette</h3>

<div class="products">
    @php
        $featured = [
            ['id'=>1,'name'=>'Laptop HP','price'=>8500],
            ['id'=>3,'name'=>'Cafetière','price'=>1200],
            ['id'=>5,'name'=>'Réfrigérateur','price'=>6500],
        ];
    @endphp

    @foreach($featured as $product)
        <div class="card">
            <h3>{{ $product['name'] }}</h3>
            <p>{{ $product['price'] }} DH</p>
            <a href="/produit/{{ $product['id'] }}">Voir détail</a>
        </div>
    @endforeach
</div>
@endsection