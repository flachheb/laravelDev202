<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGV - {{ config('app.name', 'MegaShop') }}</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>body{background:#f5f7fa;padding:20px;font-family:Arial,Helvetica,sans-serif}</style>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">{{ config('app.name', 'MegaShop') }}</div>
        </div>
    </header>

    <main>
        <h1 class="page-title">Conditions Générales de Vente (CGV)</h1>

        <div class="cgv-content">
            @if(!empty($cgv) && is_array($cgv))
                @foreach($cgv as $section)
                    <div class="cgv-section" style="background:white;padding:20px;border-radius:6px;margin-bottom:15px;">
                        <h2>{{ $section['title'] ?? 'Section' }}</h2>
                        <p>{{ $section['content'] ?? '' }}</p>
                        @if(!empty($section['items']) && is_array($section['items']))
                            <ul>
                                @foreach($section['items'] as $li)
                                    <li>{{ $li }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endforeach
            @else
                <p>Aucune CGV disponible pour le moment.</p>
            @endif

            <div style="background: #d4edda; padding: 20px; border-radius: 8px; margin-top: 30px; border-left: 4px solid #28a745;">
                <p><strong>Date de mise à jour :</strong> {{ date('d F Y') }}</p>
                <p>Ces Conditions Générales de Vente sont valables à compter de la date mentionnée et jusqu'à modification ultérieure.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 {{ config('app.name', 'MegaShop') }} - Tous droits réservés</p>
    </footer>
</body>
</html>
