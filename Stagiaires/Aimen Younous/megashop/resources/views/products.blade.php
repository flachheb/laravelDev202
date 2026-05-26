<x-master title="Détail Produit - Produits">  

    <ul>
        @foreach ($products as $product)
            <li>
                <ul>
                    <li>{{$product->name}}</li>
                    <li>{{$product->image}}</li>
                    <li>{{$product->price}}</li>
                </ul>
            </li>
        @endforeach
    </ul>   
</x-master>