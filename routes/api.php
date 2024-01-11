<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Users\OrganizatorController;
use App\Http\Controllers\Users\StudentController;

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

        
        
        // Se hace uso de grupo de rutas Actualizar y cambiar avatar
        Route::prefix('profile')->group(function ()
        {
            Route::controller(ProfileController::class)->group(function ()
            {
                Route::get('/', 'show')->name('profile');
                Route::post('/', 'store')->name('profile.store');
            });
        });


        // Rutas para CRUD organizador
        Route::prefix("organizer")->group(function ()
        {
            Route::controller(OrganizatorController::class)->group(function () {
                Route::get('/', 'index');
                Route::post('/create', 'store');
                Route::get('/{user}', 'show');
                Route::post('/{user}/update', 'update');
                Route::get('/{user}/destroy', 'destroy');
            });
        });

        // Rutas para listar, mostrar y elinar estudiantes
        Route::prefix("student")->group(function ()
        {
            Route::controller(StudentController::class)->group(function () {
                Route::get('/', 'index');
                Route::get('/{user}', 'show');
                Route::get('/{user}/destroy', 'destroy');
            });
        });




        

    


    });
});