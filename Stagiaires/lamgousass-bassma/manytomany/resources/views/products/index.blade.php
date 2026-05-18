<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>

@foreach($products as $product)

    <h2>{{ $product->name }}</h2>

    <p>Price : {{ $product->price }} DH</p>

    <h4>Categories :</h4>

    <ul>

        @foreach($product->categories as $category)

            <li>
                {{ $category->name }}
            </li>

        @endforeach

    </ul>

@endforeach
</body>
</html>