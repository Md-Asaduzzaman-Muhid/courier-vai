@extends('merchant.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-fluid py-2">

                    <form method="POST" action="{{ route('merchant.update.profile.info') }}">
                        @CSRF
                        {{ method_field('patch') }}
                        <h3 class="text-center mb-md-4 mb-2">personal details</h3>
                        <input type="hidden" name="merchant_id" value="{{ @$merchant->id  }}">
                        <div class="form-group text-center mb-5">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ @$merchant->name  }}" required autocomplete="name" placeholder="Enter Name ..."autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group text-center mb-5">
                            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ @$merchant->phone  }}" required autocomplete="phone" placeholder="Enter Phone Number ...">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group text-center mb-5">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ @$merchant->email  }}"required autocomplete="email" placeholder="Enter Email ...">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group text-center mb-5">
                            <input id="nid" type="text" class="form-control @error('nid') is-invalid @enderror" name="nid" value="{{ @$merchant->nid  }}" autocomplete="nid" placeholder="Enter NID Number (Optional) ...">
                            @error('nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group text-center mb-5">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ @$merchant->password  }}" name="password" autocomplete="new-password" placeholder="Enter Password ...">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                            <h3 class="text-center mb-md-4 mb-2">Company details</h3>
                            <div class="form-group text-center mb-5">
                                <input id="cName" type="text" class="form-control @error('cName') is-invalid @enderror" name="cName" value="{{ @$merchant->company->company_name  }}" required autocomplete="cName" placeholder="Enter Company Name ...">
                                @error('cName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group text-center mb-5">
                                <input id="cUrl" type="text" class="form-control @error('cUrl') is-invalid @enderror" name="cUrl" value="{{ @$merchant->company->company_url  }}" autocomplete="cUrl" placeholder="Enter Company URL(Facebook/Website) ...">

                                @error('cUrl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}" >
                                    <option> --- Select ---</option>
                                    <option value="Uttara"{{(isset($merchant->area) && $merchant->area == 'Uttara') ? 'selected' : ''}}>Uttara</option>
                                    <option value="Bashundhara R/A"{{(isset($merchant->area) && $merchant->area == 'Bashundhara R/A') ? 'selected' : ''}}>Bashundhara R/A</option>
                                    <option value="Gulshan"{{(isset($merchant->area) && $merchant->area == 'Gulshan') ? 'selected' : ''}}>Gulshan</option>
                                    <option value="Mirpur"{{(isset($merchant->area) && $merchant->area == 'Mirpur') ? 'selected' : ''}}>Mirpur</option>
                                    <option value="Rampura"{{(isset($merchant->area) && $merchant->area == 'Rampura') ? 'selected' : ''}}>Rampura</option>
                                    <option value="Badda"{{(isset($merchant->area) && $merchant->area == 'Badda') ? 'selected' : ''}}>Badda</option>
                                    <option value="Banani"{{(isset($merchant->area) && $merchant->area == 'Banani') ? 'selected' : ''}}>Banani</option>
                                    <option value="Mohammadpur"{{(isset($merchant->area) && $merchant->area == 'Mohammadpur') ? 'selected' : ''}}>Mohammadpur</option>
                                    <option value="Dhanmondi"{{(isset($merchant->area) && $merchant->area == 'Dhanmondi') ? 'selected' : ''}}>Dhanmondi</option>
                                    <option value="Old Town"{{(isset($merchant->area) && $merchant->area == 'Old Town') ? 'selected' : ''}}>Old Town</option>
                                    <option value="Tejgoan"{{(isset($merchant->area) && $merchant->area == 'Tejgoan') ? 'selected' : ''}}>Tejgoan</option>
                                    <option value="Khilgoan"{{(isset($merchant->area) && $merchant->area == 'Khilgoan') ? 'selected' : ''}}>Khilgoan</option>
                                    <option value="Nikunja"{{(isset($merchant->area) && $merchant->area == 'Nikunja') ? 'selected' : ''}}>Nikunja</option>
                                    <option value="Motijhil"{{(isset($merchant->area) && $merchant->area == 'Motijhil') ? 'selected' : ''}}>Motijhil</option>
                                    <option value="Demra"{{(isset($merchant->area) && $merchant->area == 'Demra') ? 'selected' : ''}}>Demra</option>
                                    <option value="Jatrabari" {{(isset($merchant->area) && $merchant->area == 'Jatrabari') ? 'selected' : ''}}>Jatrabari</option>
                                    <option value="Baridhara"{{(isset($merchant->area) && $merchant->area == 'Baridhara') ? 'selected' : ''}}>Baridhara</option>
                                    <option value="Shyamoli"{{(isset($merchant->area) && $merchant->area == 'Shyamoli') ? 'selected' : ''}}>Shyamoli</option>
                                    <option value="Mogbazar"{{(isset($merchant->area) && $merchant->area == 'Mogbazar') ? 'selected' : ''}}>Mogbazar</option>
                                    <option value="Bangla Motor"{{(isset($merchant->area) && $merchant->area == 'Bangla Motor') ? 'selected' : ''}}>Bangla Motor</option>
                                    <option value="Malibagh"{{(isset($merchant->area) && $merchant->area == 'Malibagh') ? 'selected' : ''}}>Malibagh</option>
                                    <option value="Elephent Road"{{(isset($merchant->area) && $merchant->area == 'Elephent Road') ? 'selected' : ''}}>Elephent Road</option>
                                    <option value="Green Road"{{(isset($merchant->area) && $merchant->area == 'Green Road') ? 'selected' : ''}}>Green Road</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name= "address" class="form-control" id="address" rows="5" >{{ @$merchant->company->address }}</textarea>
                            </div>

                            <h3 class="text-center mb-md-4 mb-2">Payment details</h3>
                            <div class="form-group">
                                <select class="form-control @error('payment') is-invalid @enderror" name="payment">
                                    <option> --- Select ---</option>
                                    <option value="Mobile Banking"  {{(isset($merchant->company->payment_type) && $merchant->company->payment_type == 'Mobile Banking') ? 'selected' : ''}}>Mobile Banking</option>
                                    <option value="Bank"  {{(isset($merchant->company->payment_type) && $merchant->company->payment_type == 'Bank') ? 'selected' : ''}}>Bank</option>
                                    <option value="Cash" {{(isset($merchant->company->payment_type) && $merchant->company->payment_type == 'Cash') ? 'selected' : ''}}>Cash</option>
                                </select>
                            </div>
                            <div class="form-group text-center mb-5">
                                <input id="accountHolder" type="text" class="form-control @error('accountHolder') is-invalid @enderror" name="accountHolder" value="{{ @$merchant->company->account_holder  }}" autocomplete="accountHolder" placeholder="Enter Account Holder Name ...">

                                @error('accountHolder')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="form-group text-center mb-5">
                                <input id="bankName" type="text" class="form-control @error('bankName') is-invalid @enderror" name="bankName" value="{{ @$merchant->company->bank_name  }}" required autocomplete="bankName" placeholder="Enter Bank Name ...">

                                @error('bankName')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="form-group text-center mb-5">
                                <input id="branch" type="text" class="form-control @error('branch') is-invalid @enderror" name="branch" value="{{ @$merchant->company->branch  }}" autocomplete="branch" placeholder="Enter Branch Name ...">

                                @error('branch')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="form-group text-center mb-5">
                                <input id="accountNumber" type="text" class="form-control @error('accountNumber') is-invalid @enderror" name="accountNumber" value="{{ @$merchant->company->account_number  }}" required autocomplete="accountNumber" placeholder="Enter Account Number Name ...">

                                @error('accountNumber')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                        <button type="submit" class="btn btn-common">Confirm Submit</button>

                </form>
        </div>
    </div>
<!-- /.content-wrapper -->
@endsection