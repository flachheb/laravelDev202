<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGV - Conditions Générales de Vente - MegaShop</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('informatique') }}">Informatique</a></li>
                    <li><a href="{{ route('petit-electromenager') }}">Petit Électroménager</a></li>
                    <li><a href="{{ route('grand-electromenager') }}">Grand Électroménager</a></li>
                    <li><a href="{{ route('cgv') }}">CGV</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h1 class="page-title">Conditions Générales de Vente (CGV)</h1>

        <div class="cgv-content">
            @foreach ($data as $i  => $p)
                <div class="cgv-section">
                <h2>{{ $i + 1 }}. {{ $p['title'] }}</h2>
                <p>{{ $p['content'] }}</p>
            </div>
            @endforeach
            <div class="cgv-section">
                <h2>6. Garantie et Service Après-Vente</h2>
                <h3>6.1 Garantie Légale</h3>
                <p>Tous les produits bénéficient de la garantie légale de 2 ans à partir de la date d'achat couvrant 
                les défauts de fonctionnement.</p>

                <h3>6.2 Service Technique</h3>
                <p>Un service technique est disponible par email (support@megashop.com) ou par téléphone 
                (+212 1 23 45 67 89) du lundi au vendredi, 9h à 18h.</p>

                <h3>6.3 Exclusions de Garantie</h3>
                <p>La garantie ne couvre pas :</p>
                <ul>
                    <li>Les dommages dus à une mauvaise utilisation</li>
                    <li>L'usure normale</li>
                    <li>Les dégâts causés par des chocs ou des liquides</li>
                    <li>Les modifications ou réparations non autorisées</li>
                </ul>
            </div>

            <div class="cgv-section">
                <h2>7. Responsabilité</h2>
                <h3>7.1 Limitation de Responsabilité</h3>
                <p>La responsabilité de MegaShop est limitée au montant de la commande passée. MegaShop ne peut être tenu responsable 
                des dommages indirects, pertes de données, ou préjudices commerciaux.</p>

                <h3>7.2 Disponibilité du Site</h3>
                <p>MegaShop s'efforce de maintenir le site opérationnel 24h/24. Cependant, des interruptions pour maintenance 
                peuvent survenir sans préavis. MegaShop ne peut être tenu responsable des interruptions de service.</p>
            </div>

            <div class="cgv-section">
                <h2>8. Propriété Intellectuelle</h2>
                <p>Tous les contenus du site (textes, images, logos, marques) sont la propriété exclusive de MegaShop 
                ou de ses partenaires. Toute reproduction, modification ou utilisation sans autorisation est interdite.</p>
            </div>

            <div class="cgv-section">
                <h2>9. Protection des Données Personnelles</h2>
                <p>Les données personnelles collectées lors de votre inscription et de vos achats sont soumises à notre 
                <a href="#">politique de confidentialité</a>. MegaShop s'engage à protéger vos données conformément à la 
                réglementation RGPD.</p>
            </div>

            <div class="cgv-section">
                <h2>10. Modification des CGV</h2>
                <p>MegaShop se réserve le droit de modifier les présentes Conditions Générales de Vente à tout moment. 
                Les modifications entreront en vigueur immédiatement après leur publication sur le site.</p>
            </div>

            <div class="cgv-section">
                <h2>11. Loi Applicable et Juridiction</h2>
                <p>Les présentes CGV sont régies par la loi française. Tout litige relative à l'utilisation du site 
                ou à la vente de produits sera de la compétence exclusive des tribunaux français.</p>
            </div>

            <div class="cgv-section">
                <h2>12. Contact</h2>
                <p><strong>Siège social :</strong> MegaShop, 123 Avenue du Commerce, 75001 Paris, France</p>
                <p><strong>Email :</strong> support@megashop.com</p>
                <p><strong>Téléphone :</strong> +212 1 23 45 67 89</p>
                <p><strong>SIRET :</strong> 123 456 789 00012</p>
            </div>

            <div style="background: #d4edda; padding: 20px; border-radius: 8px; margin-top: 30px; border-left: 4px solid #28a745;">
                <p><strong>Date de mise à jour :</strong> 22 février 2026</p>
                <p>Ces Conditions Générales de Vente sont valables à compter de la date mentionnée et jusqu'à modification ultérieure.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 MegaShop - Tous droits réservés</p>
        <div class="footer-links">
            <a href="{{ route('cgv') }}">CGV</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="#">Mentions Légales</a>
        </div>
        <p><strong>Email :</strong> info@megashop.com | <strong>Téléphone :</strong> +212 1 23 45 67 89</p>
    </footer>
</body>
</html>
