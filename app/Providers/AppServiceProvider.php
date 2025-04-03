<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**c
     * Bootstrap any application services.
     */
    public function boot(): void
{
    Route::middleware('web')->group(base_path('routes/web.php'));
    Route::middleware('web')->group(base_path('routes/turnos.php'));
    Route::middleware('web')->group(base_path('routes/operador.php'));
    Route::middleware('web')->group(base_path('routes/pantalla.php'));
    Route::middleware('web')->group(base_path('routes/llamados.php'));

    Route::middleware(['web', 'auth', 'is_admin'])
        ->prefix('admin')
        ->group(base_path('routes/admin.php'));
}
}
