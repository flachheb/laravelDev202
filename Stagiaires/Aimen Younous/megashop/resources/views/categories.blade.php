<x-master title="Détail Produit - Produits">  
    <ul>
        @foreach ($categories as $categorie)
            <li>
                <ul>
                    <li>{{$categorie->name}}</li>
                    <li>{{$categorie->description}}</li>
                    <li><a href="{{route('onetomany.products', $categorie->id)}}">products</a></li>
                </ul>
            </li>
        @endforeach
    </ul>   
</x-master>