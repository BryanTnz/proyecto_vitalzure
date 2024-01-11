<?php


use Illuminate\Support\Facades\Route;

// Se hace uso de grupo de rutas
// https://laravel.com/docs/9.x/routing#route-groups
// https://laravel.com/docs/9.x/routing#route-group-prefixes

Route::prefix('v1')->group(function ()
{
    // Hacer uso del archivo auth.php
    require __DIR__ . '/auth.php';

    // Se hace uso de grupo de rutas y que pasen por el proceso de auth con sanctum
    Route::middleware(['auth:sanctum'])->group(function ()
    {

        
        /*
        // Se hace uso de grupo de rutas Actualizar y cambiar avatar
        Route::prefix('profile')->group(function ()
        {
            Route::controller(ProfileController::class)->group(function ()
            {
                Route::get('/', 'show')->name('profile');
                Route::post('/', 'store')->name('profile.store');
            });
        });

        // Rutas de ejemplo
        Route::prefix("director")->group(function ()
        {
            Route::controller(DirectorController::class)->group(function () {
                Route::get('/', 'index');
                Route::post('/create', 'store');
                Route::get('/{user}', 'show');
                Route::post('/{user}/update', 'update');
                Route::get('/{user}/destroy', 'destroy');
            });
            
        });
        */

    


    });
});