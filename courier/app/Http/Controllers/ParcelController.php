<?php

namespace App\Http\Controllers;


use DB;
use Auth;
use App\Models\Merchant;
use App\Models\Reciever;
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
        // $parcel= Parcel::all();
        // $parcels = DB::table('parcels')->where('merchant_id',Auth::guard('merchant')->user()->id)->get();
        $parcels = Parcel::where('merchant_id', '=', Auth::guard('merchant')->user()->id)->orderBy('created_at', 'DESC')->get();
        $merchant_name = Auth::guard('merchant')->user()->name;

        // dd($parcels['0']->reciever);
        // $reciever = Reciever::all();
        // dd($reciever[0]->parcel);
        return view('merchant.pages.parcel.show',compact(['parcels','merchant_name']));
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
        // $reciever = new Reciever();
        // $reciever->name = $req['customer_name'];
        // $reciever->phone = $req['customer_name'];
        // $reciever->area = $req['customer_name'];
        // $reciever->address = $req['customer_name'];
        // $reciever->special_instruction = $req['customer_name'];
        // $reciever->merchant_invoice_id = $req['customer_name'];
        // $reciever->save();
        // DB::table('parcels')->insert(
        //     ['reciever_id' => $reciever->id,
        //     'merchant_id' =>  Auth::guard('merchant')->user()->id ?? $req['merchant_id'],
        //     'weight' => $req['weight'],
        //     'type' => $req['type'],
        //     'price' => $req['price'],
        //     'amount_to_collect' => $req['amount_to_collect'],
        //     'status' => 0,
        //     "created_at" =>  date('Y-m-d H:i:s'),
        //     "updated_at" => date('Y-m-d H:i:s'),]
        // );


        $parcel = new Parcel();
        $parcel->tracking_id = strtoupper(uniqid());
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
        return back()->with('success', 'Successfully Created Parcel');
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
        dd($pa);
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
        $parcel->reciever()->delete();
        $parcel->delete();
        return back()->with('success', 'Successfully Deleted Parcel');
    }
}
