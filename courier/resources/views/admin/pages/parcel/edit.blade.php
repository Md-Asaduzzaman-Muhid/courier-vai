@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-md-8">
                    <form action=
                        "@if(Auth::guard('admin')->check()) {{ route('admin.parcels.update', $parcel->id) }}
                         @elseif(Auth::guard('merchant')->check()){{ route('merchant.parcels.update', $parcel->id) }}  @endif"
                        method="post" class="form">
                        @CSRF
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" 
                                value="{{ @$parcel->reciever->name }}" autocomplete="customer_name" required autofocus>
                                <input type="text" class="form-control @error('customer_phone') is-invalid @enderror" name="customer_phone" 
                                value="{{ @$parcel->reciever->phone }}" autocomplete="customer_phone" required autofocus>
                                
                                <input name ="delivery_area" list="area-delivery" class="form-control" value="{{ @$parcel->reciever->area }}" placeholder="Enter Area">
                                    <datalist id="area-delivery">
                                    <option value="Dhanmondi">
                                    <option value="Gulshan">
                                    <option value="Banani">
                                    <option value="Uttara">
                                    <option value="Motijhil">
                                </datalist> 
                                <textarea name="customer_address" class="form-control @error('customer_address') is-invalid @enderror" rows="5" 
                                placeholder="Customers address" required>{{ @$parcel->reciever->address }}</textarea>
                                
                                <input name="merchant_invoice_id" type="text" class="form-control @error('merchant_invoice_id') is-invalid @enderror"
                                value="{{ @$parcel->reciever->merchant_invoice_id }}" placeholder="Merchant Invoice Id">
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
                                <input type="number" min="0" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Price" 
                                value="{{ @$parcel->price }}">

                                <input type="number" min="0" name="amount_to_collect" class="form-control @error('amount_to_collect') is-invalid @enderror" 
                                placeholder="Amount To Collect" value="{{ @$parcel->amount_to_collect }}">

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
                                <div class="form-group">
                                    <input type="number" min="0" name="weight" class="form-control @error('weight') is-invalid @enderror" 
                                    placeholder="Weight(g)" value="{{ @$parcel->weight }}">
                                </div>
                                <textarea name="special_instruction" class="form-control @error('special_instruction') is-invalid @enderror" rows="5" 
                                placeholder="Special Instruction">{{ @$parcel->reciever->special_instruction }}</textarea>
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