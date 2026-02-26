<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGV - Conditions Générales de Vente - {{ $config['company']['name'] }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">{{ $config['company']['name'] }}</div>
            <nav>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="informatique.html">Informatique</a></li>
                    <li><a href="petit-electromenager.html">Petit Électroménager</a></li>
                    <li><a href="grand-electromenager.html">Grand Électroménager</a></li>
                    <li><a href="/cgv">CGV</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h1 class="page-title">Conditions Générales de Vente (CGV)</h1>

        <div class="cgv-content">

            @foreach($cgv as $section)
                <div class="cgv-section">
                    <h2>{{ $section['id'] }}. {{ $section['title'] }}</h2>
                    <p>{{ $section['content'] }}</p>
                </div>
            @endforeach

            {{-- Contact section — always built from $config so it stays in sync --}}
            <div class="cgv-section">
                <h2>Contact</h2>
                <p><strong>Siège social :</strong>
                    {{ $config['company']['name'] }},
                    {{ $config['company']['address'] }},
                    {{ $config['company']['zip'] }} {{ $config['company']['city'] }},
                    {{ $config['company']['country'] }}
                </p>
                <p><strong>Email :</strong> {{ $config['company']['support_email'] }}</p>
                <p><strong>Téléphone :</strong> {{ $config['contact']['phone_support'] }}</p>
                <p><strong>SIRET :</strong> {{ $config['company']['siret'] }}</p>
            </div>

            <div style="background: #d4edda; padding: 20px; border-radius: 8px; margin-top: 30px; border-left: 4px solid #28a745;">
                <p><strong>Date de mise à jour :</strong> {{ date('d F Y') }}</p>
                <p>Ces Conditions Générales de Vente sont valables à compter de la date mentionnée et jusqu'à modification ultérieure.</p>
            </div>

        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} {{ $config['company']['name'] }} - Tous droits réservés</p>
        <div class="footer-links">
            <a href="/cgv">CGV</a>
            <a href="/contact">Contact</a>
            <a href="#">Mentions Légales</a>
        </div>
        <p>
            <strong>Email :</strong> {{ $config['company']['email'] }} |
            <strong>Téléphone :</strong> {{ $config['company']['phone'] }}
        </p>
    </footer>
</body>
</html>
