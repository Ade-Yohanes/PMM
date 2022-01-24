<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Service;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'name_category',
    
       
    ];

    public function service() {

        return $this->hasMany(Service::class);

    }

    // public function category() {

    //     return $this->hasMany(Service::class);

    // }
}
