<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel E-Commerce — @yield('title', 'Home')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <div class="nav-brand">🛒 Laravel Shop</div>
        <div class="nav-links">
            <a href="{{ route('categories.index') }}">Categories</a>
            <a href="{{ route('products.index') }}">Products</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">

        {{-- Flash Messages (success/error after actions) --}}
        @if(session('success'))
            <div class="alert alert-success">
                 {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Page Content --}}
        @yield('content')

    </div>

</body>
</html>
