<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Models\Company;

class MerchantController extends Controller
{
    public function update(Request $request, Merchant $merchant)
    {
        $req = Purify::clean($request->all());
        dd($req);
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
        
        return back()->with('success', 'Successfully Created Parcel');
    }
}
