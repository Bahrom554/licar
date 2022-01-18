<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'created_at', 'driver', 'tel_d', 'owner', 'tel_o', 'car_number', 'car', 'l_start', 'l_end', 'total_cost', 'paid_cost', 'company', 'l_cost',
        'c_start', 'c_end', 'inn', 'inps', 'expire_date'
    ];

    public function isDated()
    {
        $end = strtotime($this->l_end);
        $today = strtotime(date('y-m-d'));
        $expire_day = ceil(($end - $today) / 86400);
        $this->status = $expire_day;
        $this->save();
    }

}
