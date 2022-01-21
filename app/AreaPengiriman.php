<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AreaPengiriman extends Model
{
    protected $table = 'area_pengiriman';

    protected $fillable = [
        'nama_kota',
        'description',
       
    ];
}
