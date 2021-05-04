@extends('merchant.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">    
        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-md-9">
                    <form action= "@if(Auth::guard('admin')->check()) {{ route('admin.parcels.update', $parcel->id) }}
                            @elseif(Auth::guard('merchant')->check()){{ route('merchant.parcels.update', $parcel->id) }}  @endif"
                        method="post" class="form">
                        @CSRF
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_name" class="mb-0">Enter Customer Name</label>
                                    <input type="text" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" 
                                    value="{{ @$parcel->reciever->name }}" autocomplete="customer_name" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="customer_phone" class="mb-0">Enter Customer Phone Number</label>
                                    <input type="text" class="form-control @error('customer_phone') is-invalid @enderror" name="customer_phone" 
                                    value="{{ @$parcel->reciever->phone }}" autocomplete="customer_phone" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="delivery_area" class="mb-0">Enter Delivery Area</label>
                                    <input name ="delivery_area" list="area-delivery" class="form-control" value="{{ @$parcel->reciever->area }}" placeholder="Enter Area">
                                        <datalist id="area-delivery">
                                        <option value="Dhanmondi">
                                        <option value="Gulshan">
                                        <option value="Banani">
                                        <option value="Uttara">
                                        <option value="Motijhil">
                                    </datalist>
                                </div>
                                <div class="form-group">
                                    <label for="customer_address" class="mb-0">Enter Customer Address</label>
                                    <textarea name="customer_address" class="form-control @error('customer_address') is-invalid @enderror" rows="4" 
                                    placeholder="Customers address" required>{{ @$parcel->reciever->address }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="merchant_invoice_id" class="mb-0">Enter Merchant Invoice Id</label>
                                    <input name="merchant_invoice_id" type="text" class="form-control @error('merchant_invoice_id') is-invalid @enderror"
                                    value="{{ @$parcel->reciever->merchant_invoice_id }}" placeholder="Merchant Invoice Id">
                                </div>
                                @if(Auth::guard('admin')->check())
                                    <input name ="merchant_id" list="merchant_id" class="form-control" placeholder="Select Merchant">
                                    <datalist id="merchant_id">
                                        @foreach($merchants as $merchant)
                                        <option value={{$merchant->id}}>{{$merchant->name}}</option>
                                        @endforeach
                                    </datalist> 
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price" class="mb-0">Price</label>
                                    <input type="number" min="0" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Price" 
                                    value="{{ @$parcel->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="amount_to_collect" class="mb-0">Amount To Collect</label>
                                    <input type="number" min="0" name="amount_to_collect" class="form-control @error('amount_to_collect') is-invalid @enderror" 
                                    placeholder="Amount To Collect" value="{{ @$parcel->amount_to_collect }}">
                                </div>
                                <div class="form-group py-md-2 py-0">
                                    <label for="type" class="mb-0 d-block">Product Type</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="Type1" value="1" @if($parcel->type =='1') checked @endif>
                                        <label class="form-check-label" for="Type1">Fragile</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="Type2" value="2" @if($parcel->type =='2') checked @endif>
                                        <label class="form-check-label" for="Type2">Liquid</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="type" id="Type3" value="3" @if($parcel->type =='3') checked @endif>
                                        <label class="form-check-label" for="Type3">Solid</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="weight" class="mb-0">Weight(Kg)</label>
                                    <input type="number"  min="0"step=".1" name="weight" class="form-control @error('weight') is-invalid @enderror" 
                                    placeholder="Weight(kg)" value="{{ @$parcel->weight }}">
                                </div>
                                <div class="form-group">
                                    <label for="special_instruction" class="mb-0">Special Instruction</label>
                                    <textarea name="special_instruction" class="form-control @error('special_instruction') is-invalid @enderror" rows="4" 
                                    placeholder="Special Instruction">{{ @$parcel->reciever->special_instruction }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper text-center">
                            <button type="submit" class="btn btn-common">Update Parcel</button>
                        </div>
                    </form>
                </div>
      
                <div class="col-md-3">
                    <div class="delivery-charge-box border shadow-sm bg-white mb-2 p-2">
                        <h6>Next Day Delivery (Inside Dhaka City)</h6>
                        <ul>
                            <li>Upto 1kg = 50TK</li>
                            <li>1kg - 2kg = 70TK</li>
                            <li>2kg - 3kg = 90TK</li>
                            <li>3kg - 5kg = 140TK</li>
                        </ul>
                    </div>
                    <div class="delivery-charge-box border shadow-sm bg-white mb-2 p-2">
                        <h6>Same Day Delivery (Inside Dhaka City)</h6>
                        <ul>
                            <li>Upto 1kg = 80TK</li>
                            <li>1kg - 2kg = 120TK</li>
                            <li>2kg - 3kg = 160TK</li>
                            <li>3kg - 5kg = 200TK</li>
                        </ul>
                    </div>
                    <div class="delivery-charge-box border shadow-sm bg-white mb-2 p-2">
                        <h6>Next Day Delivery (Sub Dhaka City)</h6>
                        <ul>
                            <li>Upto 1kg = 95TK</li>
                            <li>1kg - 2kg = 125TK</li>
                            <li>2kg - 3kg = 150TK</li>
                            <li>3kg - 5kg = 190TK</li>
                        </ul>
                    </div>
                    <div class="delivery-charge-box border shadow-sm bg-white mb-2 p-2">
                        <h6>Same Day Delivery Food (Dhaka City)</h6>
                        <ul>
                            <li>Upto 1kg = 95TK</li>
                            <li>1kg - 2kg = 125TK</li>
                            <li>2kg - 3kg = 150TK</li>
                            <li>3kg - 5kg = 190TK</li>
                        </ul>
                    </div>
                    <div class="btn-wrapper text-center">
                        <a href="{{route('merchant.merchant.rate')}}" class="btn btn-common">All Delivery Charges</a>
                    </div>
                </div>
        </div>
    </div>
<!-- /.content-wrapper -->
@endsection