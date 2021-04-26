<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Models\Merchant;
use App\Models\Reciever;
use App\Models\Parcel;
use App\Models\Track;
use Illuminate\Http\Request;
use Stevebauman\Purify\Facades\Purify;

class ParcelController extends Controller
{

    public function index()
    {
        
        if(Auth::guard('merchant')->check()):
            $parcels = Parcel::where('merchant_id', '=', Auth::guard('merchant')->user()->id)->orderBy('created_at', 'DESC')->get();
            $merchant_name = Auth::guard('merchant')->user()->name;
            return view('merchant.pages.parcel.show',compact(['parcels','merchant_name']));
        elseif(Auth::guard('admin')->check()):
            $parcels = Parcel::orderBy('created_at', 'DESC')->get();
            $admin_name = Auth::guard('admin')->user()->name;
            return view('admin.pages.parcel.show',compact(['parcels']));
        else:
            return $error = "Nor Permited";
        endif;
        
        // dd($parcels['0']->reciever);
        
    }

    public function create()
    {
        $merchants = Merchant::orderBy('created_at', 'DESC')->get();
        return view('merchant.pages.parcel.create',compact(['merchants']));
    }

    public function store(Request $request)
    {
        $req = Purify::clean($request->all());
        if($req['weight'] <= 1): $charge =50; 
            elseif($req['weight']>1 && $req['weight']<=3):  $charge =80;  
            else:  $charge =100; 
        endif;
       
        $parcel = new Parcel();
        $parcel->tracking_id = strtoupper(uniqid());
        $parcel->merchant_id = Auth::guard('merchant')->user()->id ?? $req['merchant_id'];
        $parcel->weight = $req['weight'];
        $parcel->type = $req['type'];
        $parcel->price = $req['price'];
        $parcel->amount_to_collect = $req['amount_to_collect'];
        $parcel->delivery_charge = $req['delivery_charge'] ?? $charge ;
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
        DB::table('tracks')->insert(
            ['parcel_id' => $parcel->id,
            'status' => 0,
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
        $merchants = Merchant::orderBy('created_at', 'DESC')->get();
        return view('merchant.pages.parcel.edit',compact(['parcel','merchants']));
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
        
        return back()->with('success', 'Successfully Created Parcel');
    }

    public function destroy(Parcel $parcel)
    {
        $parcel->track()->delete();
        $parcel->reciever()->delete();
        $parcel->delete();
        return back()->with('success', 'Successfully Deleted Parcel');
    }
    public function track(Request $request)
    {
        $req = Purify::clean($request->all());
        $parcel = Parcel::where('tracking_id', '=', $req['tracking_id'])->orderBy('created_at', 'DESC')->first();
        // dd($parcel);
        $id = $req['tracking_id'];
        if (!empty($parcel)) :
            return view('anonymous.track',compact(['parcel']));
        else:
            return view('anonymous.track_again',compact(['id']));
        endif;
    }
}
