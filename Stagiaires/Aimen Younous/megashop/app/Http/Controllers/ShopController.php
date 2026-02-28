<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller

{
    function accueil(){
        return view('app');
    }

    function contact(){
        // Informations de l'entreprise
        $config = [
            'company' => [
                'name' => 'MegaShop',
                'siret' => '123 456 789 00012',
                'address' => '123 Avenue du Commerce',
                'city' => 'Paris',
                'zip' => '75001',
                'country' => 'France',
                'phone' => '+212 1 23 45 67 89',
                'email' => 'info@megashop.com',
                'support_email' => 'support@megashop.com',
                'sales_email' => 'ventes@megashop.com',
            ],
            'contact' => [
                'phone_general' => '+212 1 23 45 67 89',
                'phone_support' => '+212 1 23 45 67 00',
                'phone_sales' => '+212 1 23 45 67 99',
            ],
            'hours' => [
                'monday_friday' => '9:00 - 18:00',
                'saturday' => '10:00 - 16:00',
                'sunday' => 'Fermé',
            ],
            'social' => [
                'facebook' => 'https://facebook.com/megashop',
                'instagram' => 'https://instagram.com/megashop',
                'twitter' => 'https://twitter.com/megashop',
                'youtube' => 'https://youtube.com/megashop',
            ],
        ];
        $faq = [
    [
        'id' => 1,
        'question' => 'Quelle est la durée standard de livraison ?',
        'answer' => 'La livraison standard prend 5 à 7 jours ouvrables. Une livraison express est également disponible en 2 à 3 jours ouvrables.',
    ],
    [
        'id' => 2,
        'question' => 'Comment puis-je retourner un produit ?',
        'answer' => 'Vous disposez de 30 jours pour retourner votre produit. Veuillez nous contacter pour obtenir une étiquette de retour.',
    ],
    [
        'id' => 3,
        'question' => 'Acceptez-vous les paiements en plusieurs fois ?',
        'answer' => 'Oui, nous proposons le paiement en 3 ou 4 fois sans frais pour les achats supérieurs à 100 €.',
    ],
    [
        'id' => 4,
        'question' => 'Comment puis-je suivre ma commande ?',
        'answer' => 'Un numéro de suivi vous sera envoyé par email après la confirmation de votre commande.',
    ],
    [
        'id' => 5,
        'question' => 'Proposez-vous une garantie sur vos produits ?',
        'answer' => 'Tous nos produits bénéficient d\'une garantie légale de 2 ans.',
    ],
];
        return view("contact",compact("config","faq"));
    }
    function cgv(){
        $cgv = [
    [
        'id' => 1,
        'title' => 'Dispositions Générales',
        'content' => 'Les présentes Conditions Générales de Vente régissent les relations commerciales entre MegaShop et ses clients.',
    ],
    [
        'id' => 2,
        'title' => 'Offres de Produits',
        'content' => 'Les produits présentés sur le site sont offerts à titre informatif. Les prix affichés sont valables au moment de leur publication et peuvent être modifiés sans préavis.',
    ],
    [
        'id' => 3,
        'title' => 'Commandes et Confirmation',
        'content' => 'La commande en ligne constitue une offre d\'achat. La confirmation de commande n\'est effective que lorsque MegaShop a confirmé par écrit l\'acceptation de la commande.',
    ],
    [
        'id' => 4,
        'title' => 'Conditions de Règlement',
        'content' => 'MegaShop accepte les cartes bancaires, virements, PayPal et paiement en 3/4 fois.',
    ],
    [
        'id' => 5,
        'title' => 'Conditions de Livraison',
        'content' => 'Livraison gratuite à partir de 50€. Délais : 5-7 jours standard, 2-3 jours express.',
    ],
];

        return view("cgv",['data'=>$cgv]);
    }
}
