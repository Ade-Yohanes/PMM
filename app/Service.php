<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;

use App\Service;


class Service extends Model
{
    protected $table = 'service';

    protected $fillable = [
        'nama_pelayanan',
        'description',
        'slug'
       
    ];

    public function category() {

        return $this->belongsTo(Category::class);

    }

  

    // public function service_detail($id)
    // {

    // }
}
