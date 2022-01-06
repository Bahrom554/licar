<?php

namespace App\Http\Controllers;

use App\DeletedDriver;
use App\Driver;
use App\Payment;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $drivers = Driver::all();
        foreach ($drivers as $driver) {
            $driver->isExpired();
        }
    }

    public function index()
    {
        $drivers = Driver::paginate(50);
        return view('all', compact('drivers'));
    }

    public function red()
    {
        $drivers = Driver::where('status', '<', 0)->paginate(50);

        return view('all', compact('drivers'));


    }

    public function warn()
    {
        $drivers = Driver::where('status', '<', 5)->where('status', '>=', 0)->paginate(50);

        return view('all', compact('drivers'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'l_start' => ['required'],
            'l_end' => ['required'],
            'total_cost' => ['required'],
            'paid_cost' => ['required']

        ]);

        $driver = Driver::create($request->all());
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
        request()->validate([
            'driver' => ['required', 'string', 'max:255'],
            'tel_d' => ['required'],
            'owner' => ['required', 'string', 'max:255'],
            'tel_o' => ['required'],
            'car' => ['required'],
            'car_number' => ['required'],
            'l_start' => ['required'],
            'l_end' => ['required'],
            'total_cost' => ['required'],
            'paid_cost' => ['required']

        ]);

        $driver = Driver::find($id);
        $driver->update($request->except('_token', '_method'));

        return redirect(route('driver.index'))->with('message', 'driver update succesfully');

    }

    public function paid(Request $request, $id)
    {

        $driver = Driver::find($id);
        $driver->paid_cost += $request->newpay;
        $driver->save();
        $payment = new Payment();
        $payment->driver_id = $driver->id;
        $payment->payment = $request->newpay;
        $payment->save();
        return redirect()->back();

    }

    public function search(Request $request)
    {
        if ($value = $request->get('search')) {
            $drivers = Driver::where('driver', 'like', '%' . $value . '%')
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
        Driver::where('id', $id)->delete();


        return redirect()->back()->with('message', 'driver is deleted successfully');

    }
}
