<?php

namespace App\Http\Controllers;


use Auth;
use App\Models\Parcel;
use App\Models\Pickup;
use Illuminate\Http\Request;
use Stevebauman\Purify\Facades\Purify;

class PickupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guard('merchant')->check()):
            $pickups = Pickup::where('merchant_id', '=', Auth::guard('merchant')->user()->id)->orderBy('created_at', 'DESC')->get();
            return view('merchant.pages.pickup.show',compact(['pickups']));
        elseif(Auth::guard('admin')->check()):
            $pickups = Pickup::where('merchant_id', '=', Auth::guard('admin')->user()->id)->orderBy('created_at', 'DESC')->get();
            return view('admin.pages.pickup.show',compact(['pickups']));
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
        $req = Purify::clean($request->all());
        $pickup = new Pickup();
        $pickup->merchant_id = Auth::guard('merchant')->user()->id ?? $req['merchant_id'];
        $pickup->total_parcel = $req['total_parcel'];
        $pickup->pickup_time = $req['pickup_time'];
        $pickup->status = 0;
        $pickup->save();
        return back()->with('success', 'Successfully Created Parcel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pickup  $pickup
     * @return \Illuminate\Http\Response
     */
    public function show(Pickup $pickup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pickup  $pickup
     * @return \Illuminate\Http\Response
     */
    public function edit(Pickup $pickup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pickup  $pickup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pickup $pickup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pickup  $pickup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pickup $pickup)
    {
        //
    }
}
