<?php

namespace App\Http\Controllers;

class ShopController extends Controller
{
    private function loadData() {
        // Inclure le fichier de données de façon sûre.
        // On utilise `include` ici (plutôt que require_once) pour récupérer
        // le tableau retourné même si le fichier a déjà été inclus ailleurs.
        // Inclure une seule fois pour éviter la redéclaration des fonctions
        $data = @include_once app_path('data.php');

        if (!is_array($data)) {
            // Fallback : reconstruire le tableau à partir des $GLOBALS
            $data = [
                'config' => $GLOBALS['config'] ?? [],
                'categories' => $GLOBALS['categories'] ?? [],
                'products' => $GLOBALS['products'] ?? [],
                'pages' => $GLOBALS['pages'] ?? [],
                'cgv' => $GLOBALS['cgv'] ?? [],
                'faq' => $GLOBALS['faq'] ?? [],
                'navigation' => $GLOBALS['navigation'] ?? [],
            ];
        }

        return $data;
    }

    public function index() {
        $featuredProducts = getFeaturedProducts(); 
    return view('index', ['products' => $featuredProducts]);
    }

    public function contact() {
        $data = $this->loadData();
        $config = $data['config'] ?? [];
        return view('contact', [
            'company' => $config['company'] ?? $config,
            'contact' => $config['contact'] ?? [],
            'hours' => $config['hours'] ?? [],
            'social' => $config['social'] ?? [],
            'faq' => $data['faq'] ?? []
        ]);
    }

    public function cgv() {
        $data = $this->loadData();
        return view('cgv', ['cgv' => $data['cgv'] ?? []]);
    }
}