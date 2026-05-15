<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

<h1>Products of: {{ $category->name }}</h1>

@if($category->products->count() > 0)

    @foreach($category->products as $product)
        <p>
            {{ $product->name }}
            @if(isset($product->price))
                - {{ $product->price }} DH
            @endif
        </p>
    @endforeach

@else
    <p>No products found</p>
@endif

<br>

<a href="/categories">Back to categories</a>

</body>
</html>