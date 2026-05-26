<?php

namespace App\Providers;

use App\Models\Publication;
use App\Policies\publicationPolicy;
use Generator;
use Illuminate\Auth\GenericUser;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    protected $policies = [
        Publication::class=>PublicationPolicy::class
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Gate::define('update-publication',
        function(GenericUser $profile , Publication $publication){
            return $profile->id === $publication->profile_id;
        });
    }
}
