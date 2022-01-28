<?php

namespace App\Http\View\Composers;

// use App\Repositories\UserRepository;
use Illuminate\View\View;

use App\Service;

// use App\category;

class ServiceComposer
{
    

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {

        // $service = Service::with(['category'])->get();
    

        // $view->with('service', Service::with(['category'])->get());

        $view->with('service', Service::all());
        
        
        // $view->with('service', Service::with( [ 'nama_pelayanan', 'category_id.name_category' ] )->get() );

        


        // $client = Client::all();

        // return $client;
    }
}