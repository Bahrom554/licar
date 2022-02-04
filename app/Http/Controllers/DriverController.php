<?php

namespace App\Http\Controllers;

use App\DeletedDriver;
use App\Driver;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $drivers = Driver::all();
        foreach ($drivers as $driver) {
            if (Carbon::parse($driver->created_at)->day === Carbon::now()->day && Carbon::parse($driver->created_at)->month != Carbon::now()->month && $driver->l_end > Carbon::now() && $driver->index == 1) {
                $driver->paid_cost -= $driver->total_cost;
                $driver->index = 0;
                $driver->save();
            }
            if (Carbon::parse($driver->created_at)->addDays(2)->day === Carbon::now()->day) {
                $driver->index = 1;
                $driver->save();
            }

        }
        $drivers = Driver::paginate(50);
        return view('all', compact('drivers'));
    }

    public function del()
    {
        $drivers = DeletedDriver::paginate(50);
        return view('trashlist', compact('drivers'));

    }


    public function red()
    {

        $drivers = Driver::where('expire_date', '<', Carbon::now())->paginate(50);
//     $drivers = Driver::where('debt','=',1)->paginate(50);
        return view('debtlist', compact('drivers'));


    }

    public function warn()
    {

        $drivers = Driver::where('expire_date', '>', Carbon::now())->where('expire_date', '<', Carbon::now()->addDays(5))->paginate(50);

        return view('debtlist', compact('drivers'));

    }

    public function redd()
    {

        $drivers = Driver::where('l_end', '<', Carbon::now())->paginate(50);

        return view('expirelist', compact('drivers'));


    }

    public function warnd()
    {

        $drivers = Driver::where('l_end', '>', Carbon::now())->where('l_end', '<', Carbon::now()->addDays(5))->paginate(50);

        return view('expirelist', compact('drivers'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drivers = Driver::where('expire_date', '<', Carbon::now())->get();

        foreach ($drivers as $driver) {
                $driver->debt = 0;
                $total_cost = $driver->total_cost;
                $daily = $total_cost / 30;
                $date = Carbon::parse($driver->expire_date);
                $now = Carbon::parse(Carbon::now());
                $l_end = Carbon::parse($driver->l_end);
            if($driver->l_end >= Carbon::now()){
                $diff = $now->diffInDays($date);
                $driver->debt -= $daily*$diff;
                $driver->save();
            }
            else if($driver->l_end < Carbon::now() && $driver->l_end > $driver->expire_date){
                $diff = $l_end->diffInDays($date);
                $driver->debt -= $daily*$diff;
                $driver->save();

            }
        }

     return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'driver' => ['required', 'string', 'max:255'],
            'tel_d' => ['required'],
            'owner' => ['required', 'string', 'max:255'],
            'tel_o' => ['required'],
            'car' => ['required'],
            'car_number' => ['required'],
            'company' => ['required'],
            'l_start' => ['required'],
            'l_end' => ['required'],
            'l_cost' => ['required'],
            'c_start' => ['required'],
            'c_end' => ['required'],
            'inn' => ['required'],
            'inps' => ['required'],
            'inn_o' => ['required'],
            'inps_o' => ['required'],
            'total_cost' => ['required'],
            'paid_cost' => ['required'],
            'created_at' => ['required']

        ]);

        $driver = Driver::create($request->all() + ['expire_date' => $request->created_at]);
        /**/
        $total_cost = $driver->total_cost;
        $daily = $total_cost / 30;

        $days = (int)$request->paid_cost / $daily;

        $driver->expire_date = Carbon::parse($driver->expire_date)->addDays($days);
        /**/
        $driver->save();

             $payment = new Payment();
             $payment->driver_id = $driver->id;
             $payment->payment = $request->paid_cost;
             $payment->created_at = $request->created_at;
             $payment->save();

        return redirect(route('driver.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driver = Driver::find($id);
        $payments = Payment::where('driver_id', $id)->get();
        return view('show', compact('driver', 'payments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'driver' => ['required', 'string', 'max:255'],
            'tel_d' => ['required'],
            'owner' => ['required', 'string', 'max:255'],
            'tel_o' => ['required'],
            'car' => ['required'],
            'car_number' => ['required'],
            'company' => ['required'],
            'l_start' => ['required'],
            'l_end' => ['required'],
            'l_cost' => ['required'],
            'c_start' => ['required'],
            'c_end' => ['required'],
            'inn' => ['required'],
            'inps' => ['required'],
            'inn_o' => ['required'],
            'inps_o' => ['required']
        ]);

        $driver = Driver::find($id);
        $driver->update($request->except('_token', '_method'));
        return redirect()->back();

    }

    public function paid(Request $request, $id)
    {

        $driver = Driver::find($id);
        /**/
        $total_cost = $driver->total_cost;
        $daily = $total_cost / 30;
        $days = (int)$request->newpay / $daily;
        $driver->expire_date = Carbon::parse($driver->expire_date)->addDays($days);
        /**/
        $driver->paid_cost += $request->newpay;
        $driver->save();
        $payment = new Payment();
        $payment->driver_id = $driver->id;
        $payment->payment = $request->newpay;
        $payment->created_at = $request->created_at;
        $payment->save();
        return redirect()->back();

    }

    public function search(Request $request)
    {
        if ($value = $request->get('search')) {
            $drivers = Driver::where('driver', 'like', '%' . $value . '%')
                ->orWhere('company', 'like', '%' . $value . '%')
                ->orWhere('owner', 'like', '%' . $value . '%')
                ->orWhere('tel_d', 'like', '%' . $value . '%')
                ->orWhere('tel_o', 'like', '%' . $value . '%')
                ->orWhere('car', 'like', '%' . $value . '%')
                ->orWhere('car_number', 'like', '%' . $value . '%')
                ->get();
            return response()->json([
                'view' => view('table', compact('drivers'))->render()
            ]);

        } else {


            $drivers = Driver::where('id', '<', -1)->get();
            return response()->json([
                'view' => view('table', compact('drivers'))->render()
            ]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
        DeletedDriver::create($driver->toArray());

        $driver->delete();
        return redirect(route('driver.index'));

    }

}
