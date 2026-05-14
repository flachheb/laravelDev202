<h1>Liste des Catégories</h1>
<ul>
    @foreach($categories as $category)
        <li>
            <a href="{{ route('categories.show', $category->id) }}">
                {{ $category->name }}
            </a>
        </li>
    @endforeach
</ul>