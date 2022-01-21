<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

use App\Http\View\Composers\CategoryComposer;

use App\Http\View\Composers\ClientComposer;

use App\Http\View\Composers\ServiceComposer;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        // sample call view composer 
        // View::composer(
        //     ['profile', 'dashboard'],
        //     MultiComposer::class);


        View::composer(
            ['home', 'about'],
            CategoryComposer::class
        );

        View::composer(
            ['home','components.client','about' ],
            ClientComposer::class
        );

        View::composer(
            ['home','about', 'service','site-footer','nav'],
            ServiceComposer::class
        );

        // View::composer(
        //     ['site-footer' ],
        //     ServiceComposer::class
        // );

        // View::composer( 'site-footer', function($view) {
        //     $service = ServiceComposer::class ;
        //     $view->with( 'service', $service );
        //     } );
        

    }
}
