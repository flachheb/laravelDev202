<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGV - {{ $data['company']['name'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">{{ $data['company']['name'] }}</div>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h1 class="page-title">Conditions Générales de Vente (CGV)</h1>

        <div class="cgv-content">
            {{-- hna fin k-y-khdem l-Loop dyalk --}}
            @foreach($cgv_sections as $section)
                <div class="cgv-section">
                    <h2>{{ $section['id'] }}. {{ $section['title'] }}</h2>
                    <p>{{ $section['content'] }}</p>
                </div>
            @endforeach
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} {{ $data['company']['name'] }} - Tous droits réservés</p>
    </footer>
</body>
</html>