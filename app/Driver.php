<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'driver','tel_d','owner','tel_o','car_number','car','l_start','l_end','total_cost','paid_cost'
    ];


    public function listAll(){
//

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
        $expire_day = ceil(($end - $today)/86400);
        $iscost = $this->total_cost - $this->paid_cost;

        $check_day = $paid_day - $past_day;
        if($check_day<0 && $iscost>0){
//            qarz
            $this->status  = $check_day;
            $this->save();
            return;
        }

        if($expire_day< 0){
//            litsenziya
            $this->status  = 1;
            $this->save();
            return;
        }

        if($check_day>0 && $check_day < 5 && $iscost>0 ){
//            pul w
            $this->status  = 3;
            $this->save();
            return;

        }

         if($expire_day < 5 && $expire_day > 0){
//          litsenziya w
            $this->status  = 2;
            $this->save();
            return;
        }






    }
    public function isExpired(){
//

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
        $expire_day = ceil(($end - $today)/86400);
        $iscost = $this->total_cost - $this->paid_cost;
        $check_day = $paid_day - $past_day;
        if($check_day<0 && $iscost>0){
//            qarz
            $this->status  = $check_day;
            $this->save();
            return;
        }



        if($check_day>0 && $check_day < 5 && $iscost>0 ){
//            pul w
            $this->status  = 3;
            $this->save();
            return;

        }








    }
    public function  isDated(){
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
        $expire_day = ceil(($end - $today)/86400);

        $check_day = $paid_day - $past_day;


        if($expire_day< 0){
//            litsenziya
            $this->status  = 1;
            $this->save();
            return;
        }

        if($expire_day < 5 && $expire_day > 0){
//          litsenziya w
            $this->status  = 2;
            $this->save();
            return;
        }



    }

}
