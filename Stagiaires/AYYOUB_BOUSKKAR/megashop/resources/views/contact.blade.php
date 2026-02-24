@extends('layouts.app')

@section('title', 'Contact - MegaShop')

@section('content')

<h1 class="page-title">Nous Contacter</h1>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">

    <div class="form-container" style="margin: 0;">
        <h2>Formulaire de Contact</h2>

        <form method="POST" action="#">
            @csrf

            <div class="form-group">
                <label>Nom Complet *</label>
                <input type="text" name="nom" required>
            </div>

            <div class="form-group">
                <label>Email *</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Téléphone</label>
                <input type="tel" name="telephone">
            </div>

            <div class="form-group">
                <label>Sujet *</label>
                <select name="sujet" required>
                    <option value="">-- Sélectionnez un sujet --</option>
                    <option value="commande">Commande</option>
                    <option value="retour">Retour / Échange</option>
                    <option value="produit">Produit</option>
                    <option value="technique">Problème technique</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <div class="form-group">
                <label>Message *</label>
                <textarea name="message" required></textarea>
            </div>

            <button type="submit" class="btn btn-secondary" style="width: 100%;">
                Envoyer le message
            </button>
        </form>
    </div>

    <!-- Infos -->
    <div>
        <div style="background: white; padding: 30px; border-radius: 8px;">
            <h3>📞 Nos Coordonnées</h3>

            <p><strong>Adresse :</strong><br>
                MegaShop<br>
                123 Avenue du Commerce<br>
                75001 Paris<br>
                France
            </p>

            <p><strong>Téléphone :</strong><br>
                +212 1 23 45 67 89
            </p>

            <p><strong>Email :</strong><br>
                info@megashop.com
            </p>

            <p><strong>Horaires :</strong><br>
                Lundi - Vendredi : 9h - 18h
            </p>
        </div>
    </div>

</div>

@endsection