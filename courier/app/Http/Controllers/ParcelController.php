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

    public function index()
    {
        $parcels = Parcel::where('merchant_id', '=', Auth::guard('merchant')->user()->id)->orderBy('created_at', 'DESC')->get();
        $merchant_name = Auth::guard('merchant')->user()->name;
        // dd($parcels['0']->reciever);
        return view('merchant.pages.parcel.show',compact(['parcels','merchant_name']));
    }

    public function create()
    {
        return view('merchant.pages.parcel.create');
    }

    public function store(Request $request)
    {
        $req = Purify::clean($request->all());
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

    public function show(Parcel $parcel)
    {
        //
    }

    public function edit(Parcel $parcel)
    {
        // dd($parcel->reciever);
        return view('merchant.pages.parcel.edit',compact(['parcel']));
        // dd($parcel);
    }

    public function update(Request $request, Parcel $parcel)
    {
        $req = Purify::clean($request->all());
        $parcel->merchant_id = Auth::guard('merchant')->user()->id ?? $req['merchant_id'];
        $parcel->weight = $req['weight'];
        $parcel->type = $req['type'];
        $parcel->price = $req['price'];
        $parcel->amount_to_collect = $req['amount_to_collect'];
        $parcel->save();
        DB::table('recievers')->where('parcel_id',$parcel->id)->update(array(
            'name' => $req['customer_name'],
            'phone' => $req['customer_phone'],
            'area' => $req['delivery_area'],
            'address' => $req['customer_address'],
            'special_instruction' => $req['special_instruction'],
            'merchant_invoice_id' => $req['merchant_invoice_id'],
            "updated_at" => date('Y-m-d H:i:s')
        ));
        // dd($parcel);
        return back()->with('success', 'Successfully Created Parcel');
    }

    public function destroy(Parcel $parcel)
    {
        $parcel->reciever()->delete();
        $parcel->delete();
        return back()->with('success', 'Successfully Deleted Parcel');
    }

}
