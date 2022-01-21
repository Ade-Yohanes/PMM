<?php

namespace App\Http\View\Composers;

// use App\Repositories\UserRepository;
use Illuminate\View\View;

use App\category;
use App\Service;

// use App\category;

class CategoryComposer
{
    
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('category', Category::all());

        $view->with('service', Category::with(['Service'])->get());
    }
}