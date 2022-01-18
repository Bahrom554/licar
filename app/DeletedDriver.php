<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeletedDriver extends Model
{
    protected $fillable = [
        'id', 'created_at', 'driver','tel_d','owner','tel_o','car_number','car','l_start','l_end','total_cost','paid_cost','company','l_cost','c_start','c_end','inn','inps'
    ];
}
