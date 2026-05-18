<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Categories</h1>

@foreach($categories as $category)

    <h2>{{ $category->name }}</h2>

    <ul>

        @foreach($category->products as $product)

            <li>
                {{ $product->name }} -
                {{ $product->price }} DH
            </li>

        @endforeach

    </ul>

@endforeach
</body>
</html>