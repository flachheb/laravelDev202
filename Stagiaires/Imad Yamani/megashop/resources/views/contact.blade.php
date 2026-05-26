<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - {{ $config['company']['name'] }}</title>
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
        <h1 class="page-title">Nous Contacter</h1>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">

            {{-- Formulaire de contact --}}
            <div class="form-container" style="margin: 0;">
                <h2>Formulaire de Contact</h2>
                <form method="POST" action="/contact">
                    @csrf

                    @if(session('success'))
                        <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 4px solid #28a745;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="nom">Nom Complet *</label>
                        <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
                        @error('nom') <span style="color: red; font-size: 14px;">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse Email *</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email') <span style="color: red; font-size: 14px;">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}">
                    </div>

                    <div class="form-group">
                        <label for="sujet">Sujet *</label>
                        <select id="sujet" name="sujet" required>
                            <option value="">-- Sélectionnez un sujet --</option>
                            <option value="commande"  {{ old('sujet') == 'commande'  ? 'selected' : '' }}>À propos d'une commande</option>
                            <option value="retour"    {{ old('sujet') == 'retour'    ? 'selected' : '' }}>Retour / Échange</option>
                            <option value="produit"   {{ old('sujet') == 'produit'   ? 'selected' : '' }}>Informations sur un produit</option>
                            <option value="technique" {{ old('sujet') == 'technique' ? 'selected' : '' }}>Problème technique</option>
                            <option value="autre"     {{ old('sujet') == 'autre'     ? 'selected' : '' }}>Autre</option>
                        </select>
                        @error('sujet') <span style="color: red; font-size: 14px;">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required>{{ old('message') }}</textarea>
                        @error('message') <span style="color: red; font-size: 14px;">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-secondary" style="width: 100%; padding: 15px; font-size: 16px;">
                        Envoyer le message
                    </button>
                </form>
            </div>

            {{-- Informations de contact --}}
            <div>
                <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); margin-bottom: 25px;">
                    <h3 style="color: #2c3e50; margin-bottom: 20px;">📞 Nos Coordonnées</h3>

                    <div style="margin-bottom: 25px;">
                        <h4 style="color: #3498db; margin-bottom: 8px;">Siège Social</h4>
                        <p style="color: #555; line-height: 1.8;">
                            {{ $config['company']['name'] }}<br>
                            {{ $config['company']['address'] }}<br>
                            {{ $config['company']['zip'] }} {{ $config['company']['city'] }}<br>
                            {{ $config['company']['country'] }}
                        </p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="color: #3498db; margin-bottom: 8px;">Téléphone</h4>
                        <p style="color: #555;">
                            <strong>Général :</strong> {{ $config['contact']['phone_general'] }}<br>
                            <strong>Support :</strong> {{ $config['contact']['phone_support'] }}<br>
                            <strong>Ventes :</strong> {{ $config['contact']['phone_sales'] }}
                        </p>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h4 style="color: #3498db; margin-bottom: 8px;">Email</h4>
                        <p style="color: #555;">
                            <strong>Général :</strong> {{ $config['company']['email'] }}<br>
                            <strong>Support :</strong> {{ $config['company']['support_email'] }}<br>
                            <strong>Ventes :</strong> {{ $config['company']['sales_email'] }}
                        </p>
                    </div>

                    <div>
                        <h4 style="color: #3498db; margin-bottom: 8px;">Horaires d'Ouverture</h4>
                        <p style="color: #555;">
                            Lundi - Vendredi : {{ $config['hours']['monday_friday'] }}<br>
                            Samedi : {{ $config['hours']['saturday'] }}<br>
                            Dimanche : {{ $config['hours']['sunday'] }}
                        </p>
                    </div>
                </div>

                <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <h3 style="color: #2c3e50; margin-bottom: 20px;">💬 Réseaux Sociaux</h3>
                    <p style="margin-bottom: 15px;">Suivez-nous sur nos réseaux sociaux pour les dernières actualités et offres :</p>
                    <div style="display: flex; gap: 15px;">
                        <a href="{{ $config['social']['facebook'] }}"  style="color: #3498db; text-decoration: none; font-weight: bold;">📘 Facebook</a>
                        <a href="{{ $config['social']['instagram'] }}" style="color: #3498db; text-decoration: none; font-weight: bold;">📷 Instagram</a>
                        <a href="{{ $config['social']['twitter'] }}"   style="color: #3498db; text-decoration: none; font-weight: bold;">🐦 Twitter</a>
                        <a href="{{ $config['social']['youtube'] }}"   style="color: #3498db; text-decoration: none; font-weight: bold;">▶️ YouTube</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQ --}}
        <section style="background: white; padding: 30px; border-radius: 8px; margin-bottom: 40px;">
            <h2 style="color: #2c3e50; margin-bottom: 30px; border-bottom: 3px solid #3498db; padding-bottom: 15px;">
                ❓ Questions Fréquemment Posées
            </h2>
            <div style="display: grid; gap: 20px;">
                @foreach($faq as $item)
                    <div>
                        <h4 style="color: #2c3e50; margin-bottom: 8px;">{{ $item['question'] }}</h4>
                        <p style="color: #555; margin-left: 15px;">{{ $item['answer'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Localisation --}}
        <section style="background: white; padding: 30px; border-radius: 8px;">
            <h2 style="color: #2c3e50; margin-bottom: 20px; border-bottom: 3px solid #3498db; padding-bottom: 15px;">
                📍 Où nous trouver
            </h2>
            <p style="color: #555; margin-bottom: 20px;">
                Notre siège social est situé au cœur de {{ $config['company']['city'] }}. Vous pouvez nous rendre visite
                sur rendez-vous pour discuter de vos besoins en électroménager et informatique.
            </p>
            <div style="width: 100%; height: 300px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                        border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 18px;">
                Carte Google Maps (à intégrer)
            </div>
        </section>
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
