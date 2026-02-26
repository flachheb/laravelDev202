<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index () {
        return view('index');
    }
    public function contact() {
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

        return view('contact', ['data' =>$config]);
        //return view('contact', ['item' =>$fag]);
    }
    public function cgv() {
    // 1. l-m3loumat dyal l-charika (darouriya hit mkhdma f l-blade)
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
        ],
        'contact' => [
            'phone_general' => '+212 1 23 45 67 89',
        ]
    ];

    // 2. l-m3loumat dyal l-CGV li saybti
    $cgv = [
        [
            'id' => 1,
            'title' => 'Dispositions Générales',
            'content' => 'Les présentes Conditions Générales de Vente régissent les relations commerciales entre MegaShop et ses clients.',
        ],
        [
            'id' => 2,
            'title' => 'Offres de Produits',
            'content' => 'Les produits présentés sur le site sont offerts à titre informatif...',
        ],
        // ... kammél l-baqi
    ];

    // 3. d-duwz l-kollachi l-view
    return view('cgv', [
        'data' => $config, 
        'cgv_sections' => $cgv
    ]);
}
}
