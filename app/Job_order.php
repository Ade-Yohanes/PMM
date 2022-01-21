<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Job_order extends Model
{
    public $table = 'Job_orders';
    public $fillable = ['nama','email','perusahaan', 'phone', 'service', 'lampiran', 'pesan' ];
}
