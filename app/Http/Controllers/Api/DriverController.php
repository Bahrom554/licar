<?php

namespace App\Http\Controllers\Api;

use App\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DriverController extends Controller
{
  public  function getAll(){
       $drivers = Driver::paginate(100);
      return response()->json(['drivers' => $drivers])->setStatusCode(200);
  }
}
