<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'created_at', 'driver', 'tel_d', 'owner', 'tel_o', 'car_number', 'car', 'l_start', 'l_end', 'total_cost', 'paid_cost', 'company', 'l_cost',
        'c_start', 'c_end', 'inn', 'inps', 'expire_date','inn_o','inps_o','index'
    ];

   public function  checker()
   {
       if (Carbon::parse($this->l_start)->day === Carbon::now()->day ||
           Carbon::parse($this->l_start)->addDays(1)->day === Carbon::now()->day ||
           Carbon::parse($this->l_start)->addDays(2)->day === Carbon::now()->day ||
           Carbon::parse($this->l_start)->addDays(3)->day === Carbon::now()->day ||
           Carbon::parse($this->l_start)->addDays(4)->day === Carbon::now()->day ||
           Carbon::parse($this->l_start)->addDays(5)->day === Carbon::now()->day) {
           return true;
       }
       else {
           return false;
       }
   }


//   public function  isDebt(){
//       if($this->expire_date  <  Carbon::now()){
//           $this->debt = 1;
//       }
//       else if($this->expire_date< Carbon::now()->addDays(5)){
//           $this->debt = 2;
//       }
//       else {
//           $this->debt = 0;
//       }
//       $this->save();
//
//   }
//    public function isDated()
//    {
//
//        if($this->l_end  <  Carbon::now()){
//            $this->status = 1;
//        }
//        else if($this->l_end< Carbon::now()->addDays(5)){
//            $this->status = 2;
//        }
//        else {
//            $this->status = 0;
//        }
//        $this->save();
//    }

}
