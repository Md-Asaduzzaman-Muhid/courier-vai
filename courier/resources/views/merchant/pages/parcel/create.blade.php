@extends('merchant.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-md-8">
                    <form action="@if(Auth::guard('admin')->check()) {{route('admin.parcels.store')}}
                         @elseif(Auth::guard('merchant')->check()){{route('merchant.parcels.store')}}  @endif" method="post" class="form">
                        @CSRF
                        <div class="row">
                            <div class="col-md-6">
                                <input name="customer_name" type="text" class="form-control" placeholder="Customer name" required>
                                <input name="customer_phone" type="tel" class="form-control" placeholder="Customer Phone Number" required>
                                <input name ="delivery_area" list="area-delivery" class="form-control" placeholder="Select Delivery Area">
                                    <datalist id="area-delivery">
                                        <option value="Dhaka">
                                        <option value="Gulshan">
                                        <option value="Banani">
                                        <option value="Uttara">
                                        <option value="Motijhil">
                                    </datalist> 
                                <textarea name="customer_address" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Customers address" required></textarea>
                                @if(Auth::guard('admin')->check())
                                    <input name ="merchant_id" list="merchant_id" class="form-control" placeholder="Select Merchant">
                                    <datalist id="merchant_id">
                                        @foreach($merchants as $merchant)
                                        <option value={{$merchant->id}}>{{$merchant->name}}</option>
                                        @endforeach
                                    </datalist> 
                                @endif
                                <input name="merchant_invoice_id" type="text" class="form-control" placeholder="Merchant Invoice Id">
                            </div>
                            <div class="col-md-6">
                                <input type="number" min="0" name="price" class="form-control" placeholder="Price">
                                <input type="number" min="0" name="amount_to_collect" class="form-control" placeholder="Amount To Collect">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="Type1" value="1">
                                    <label class="form-check-label" for="Type1">Fragile</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="Type2" value="2">
                                    <label class="form-check-label" for="Type2">Liquid</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="Type3" value="3">
                                    <label class="form-check-label" for="Type3">Solid</label>
                                </div>
                                <div class="form-group">
                                    <input type="number" min="0"step=".1" name="weight" class="form-control" placeholder="Weight(kg)">
                                </div>
                                <textarea name="special_instruction" class="form-control" rows="5" placeholder="Special Instruction"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-common">Confirm Submit</button>
                    </form>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            
        </div>
    </div>
<!-- /.content-wrapper -->
@endsection