<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Hash;
use App\Models\Merchant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    protected function updateMerchantForm()
    {
        $merchant = Auth::guard('merchant')->user();
//        dd($merchant->company);
        return view('merchant.pages.update_profile',compact(['merchant']));
    }

    protected function updateMerchant(Request $request)
    {
//        dd($request);
        DB::table('merchants')->where(['id' => $request['merchant_id']])->
        update(['name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'nid' => $request['nid'],
            'password' => Hash::make($request['password']),
            'area' => $request['area']]);
        DB::table('companies')->where(['merchant_id' => $request['merchant_id']])->
        update(['address' => $request['address'],
            'company_name' => $request['cName'],
            'company_url' => $request['cUrl'],
            'payment_type' => $request['payment'],
            'account_holder' => $request['accountHolder'],
            'bank_name' => $request['bankName'],
            'account_number' => $request['accountNumber'],
            'branch' => $request['branch']]);
        return back()->with('success', 'Successfully Created Parcel');
    }
}
