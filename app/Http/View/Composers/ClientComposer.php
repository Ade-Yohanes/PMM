<?php

namespace App\Http\View\Composers;

// use App\Repositories\UserRepository;
use Illuminate\View\View;

use App\Client;

// use App\category;

class ClientComposer
{
    
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('client', Client::all());

        // $client = Client::all();

        // return $client;
    }
}