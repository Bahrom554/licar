<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeletedDriver extends Model
{
    protected $fillable = [
        'driver','tel_d','owner','tel_o','car_number','car','l_start','l_end','total_cost','paid_cost'
    ];
}
