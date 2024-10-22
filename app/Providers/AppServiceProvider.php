<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                'Dashboard',
                'Students',
                'Konten',
                'Roles and Permissions',
            ]);

            // Mengganti nama brand atau logo di header
            Filament::registerRenderHook(
                'branding.after', 
                fn() => '<span class="text-xl font-bold">MI</span>'
            );
        });
    }
}
