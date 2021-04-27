<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Payment;
use App\Models\Parcel;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        if(Auth::guard('merchant')->check()):
            $parcels = Parcel::where('merchant_id', '=', Auth::guard('merchant')->user()->id)->orderBy('created_at', 'DESC')->get();
            return view('merchant.pages.payment.show',compact(['parcels']));
        elseif(Auth::guard('admin')->check()):
            $parcels = Parcel::orderBy('created_at', 'DESC')->get();
            return view('admin.pages.payment.show',compact(['parcels']));
        else:
            return $error = "Nor Permited";
        endif;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $payment->status = $request['status'];

        $payment->save();
        return back()->with('success', 'Successfully Created Parcel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
