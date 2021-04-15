<?php

namespace App\Http\Controllers;


use DB;
use Auth;
use App\Models\Parcel;
use Illuminate\Http\Request;
use Stevebauman\Purify\Facades\Purify;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('merchant.pages.parcel.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merchant.pages.parcel.create');
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
        // dd($req);
        $parcel = new Parcel();
        $parcel->merchant_id = Auth::guard('merchant')->user()->id ?? $req['merchant_id'];
        $parcel->weight = $req['weight'];
        $parcel->type = $req['type'];
        $parcel->price = $req['price'];
        $parcel->amount_to_collect = $req['amount_to_collect'];
        $parcel->save();
        DB::table('recievers')->insert(
            ['parcel_id' => $parcel->id,
            'name' => $req['customer_name'],
            'phone' => $req['customer_phone'],
            'area' => $req['delivery_area'],
            'address' => $req['customer_address'],
            'special_instruction' => $req['special_instruction'],
            'merchant_invoice_id' => $req['merchant_invoice_id'],
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),]
        );
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function show(Parcel $parcel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcel $parcel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parcel $parcel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcel $parcel)
    {
        //
    }
}
