<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void { /* ... */ }

    public function boot(): void
    {
        // 1. On charge le fichier de données et on récupère le tableau central
        $data = require_once app_path('data.php');

        // 2. On partage les variables avec TOUTES les vues Blade
        // Utiliser le tableau retourné par data.php et fournir des fallbacks
        View::share('navigation', $data['navigation'] ?? []);
        View::share('config', $data['config'] ?? []);
        View::share('categories', $data['categories'] ?? []);
    }
}
