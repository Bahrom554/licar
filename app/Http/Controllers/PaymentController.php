<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use DB;
use App\Payment;
use App\Driver;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $companies = DB::table('drivers')
            ->select('company')
            ->distinct()->get();
            $company =" ";
            $date = Carbon::now();
            $count = 0;

            return view('allmoney',compact('companies','company','date','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $companies = DB::table('drivers')
        ->select('company')
        ->distinct()->get();
        request()->validate([ 
            'company' => ['required'],
            'date' => ['required'],
           ]);
        $company =$request->company;
         $date = $request->date;
         $count =0;
        $drivers=Driver::where('company',$company)->get();
        // $payments=Payment::where('created_at',$date)->get();
        foreach($drivers as $driver){
            $payments = Payment::where('created_at',$date)->where('driver_id',$driver->id)->get();
            foreach($payments as $payment){
                $count+=$payment->payment;
            }
            
        }
        return view('allmoney',compact('companies','company','date','count'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        $payment=Payment::find($id);
        $driver=Driver::find($payment->driver_id);
        $driver->paid_cost -= (int)$payment->payment;
        $driver->save();
        $payment->delete();
        return redirect()->back();
    }
}
