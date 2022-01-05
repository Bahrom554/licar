<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'driver','tel_d','owner','tel_o','car_number','car','l_start','l_end','total_cost','paid_cost'
    ];
    public function isExpired(){
        $start = strtotime($this->l_start);
        $end = strtotime($this->l_end);
        $today = strtotime(date('y-m-d'));
        $total_day = ceil(abs($end - $start) / 86400);
        if($total_day==0){
            $total_day=1;
        }
        $cost_perday = ceil($this->total_cost/$total_day);
        $paid_day =ceil($this->paid_cost/$cost_perday);
        $past_day = ceil(abs($today-$start)/86400);
        $check_day = $paid_day - $past_day;
        $this->status  = $check_day;
        $this->save();




    }
}
