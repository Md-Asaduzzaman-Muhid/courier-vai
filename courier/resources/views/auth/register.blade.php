@extends('layouts.app')

@section('content')
<section class="register-section py-5">
    <div class="container">
        <div class="register-container shadow my-5 py-5">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="login-description text-center p-3">
                        <h3>Welcome To Parcel Goal</h3>
                        <p>One stop home delivery service door to door. Give us parcel and enjoy super fast delivery.</p>
                        @isset($url)
                            <a class="btn btn-solid" href='{{ route("$url.login") }} '>Login</a>
                        @else
                            <a class="btn btn-solid" href="{{ route('login') }} ">Login</a>
                        @endisset
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="register-form">
                        @isset($url)
                        <form  id="regForm" method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                        @else
                        <form  id="regForm"  method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @endisset
                        @csrf
                            <div class="tab">
                                <h3 class="text-center mb-md-4 mb-2">personal details</h3>
                                
                                        <div class="form-group text-center mb-5">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Name ..."autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    
                                        <div class="form-group text-center mb-5">
                                            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror"maxlength="14"minlength="11" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Enter Phone Number ...">

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    
                                <div class="form-group text-center mb-5">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"required autocomplete="email" placeholder="Enter Email ...">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group text-center mb-5">
                                        <input id="nid" type="text" class="form-control @error('nid') is-invalid @enderror" name="nid" value="{{ old('nid') }}" autocomplete="nid" placeholder="Enter NID Number (Optional) ...">

                                        @error('nid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group text-center mb-5">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password ...">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group text-center mb-5">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password ...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($url == 'merchant')
                            <div class="tab">
                                <h3 class="text-center mb-md-4 mb-2">Company details</h3>
                                <div class="form-group text-center mb-5">
                                        <input id="cName" type="text" class="form-control @error('cName') is-invalid @enderror" name="cName" value="{{ old('cName') }}" required autocomplete="cName" placeholder="Enter Company Name ...">

                                        @error('cName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group text-center mb-5">
                                        <input id="cUrl" type="text" class="form-control @error('cUrl') is-invalid @enderror" name="cUrl" value="{{ old('cUrl') }}" autocomplete="cUrl" placeholder="Enter Company URL(Facebook/Website) ...">

                                        @error('cUrl')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <select class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}" >
                                        <option> --- Select ---</option>
                                        <option value="Uttara">Uttara</option>
                                        <option value="Bashundhara R/A">Bashundhara R/A</option>
                                        <option value="Gulshan">Gulshan</option>
                                        <option value="Mirpur">Mirpur</option>
                                        <option value="Rampura">Rampura</option>
                                        <option value="Badda">Badda</option>
                                        <option value="Banani">Banani</option>
                                        <option value="Mohammadpur">Mohammadpur</option>
                                        <option value="Dhanmondi">Dhanmondi</option>
                                        <option value="Old Town">Old Town</option>
                                        <option value="Tejgoan">Tejgoan</option>
                                        <option value="Khilgoan">Khilgoan</option>
                                        <option value="Nikunja">Nikunja</option>
                                        <option value="Motijhil">Motijhil</option>
                                        <option value="Demra">Demra</option>
                                        <option value="Jatrabari">Jatrabari</option>
                                        <option value="Baridhara">Baridhara</option>
                                        <option value="Shyamoli">Shyamoli</option>
                                        <option value="Mogbazar">Mogbazar</option>
                                        <option value="Bangla Motor">Bangla Motor</option>
                                        <option value="Malibagh">Malibagh</option>
                                        <option value="Elephent Road">Elephent Road</option>
                                        <option value="Green Road">Green Road</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name= "address" class="form-control" id="address" rows="5" >{{ old('address') }}</textarea>
                                </div>
                            </div>
                            <div class="tab">
                                <h3 class="text-center mb-md-4 mb-2">Payment details</h3>
                                <div class="form-group">
                                    <select class="form-control @error('payment') is-invalid @enderror" name="payment" value="{{ old('payment') }}" >
                                        <option> --- Select ---</option>
                                        <option value="Mobile Banking">Mobile Banking</option>
                                        <option value="Bank">Bank</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                                <div class="form-group text-center mb-5">
                                        <input id="accountHolder" type="text" class="form-control @error('accountHolder') is-invalid @enderror" name="accountHolder" value="{{ old('accountHolder') }}" autocomplete="accountHolder" placeholder="Enter Account Holder Name ...">

                                        @error('accountHolder')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group text-center mb-5">
                                        <input id="bankName" type="text" class="form-control @error('bankName') is-invalid @enderror" name="bankName" value="{{ old('bankName') }}" required autocomplete="bankName" placeholder="Enter Bank Name ...">

                                        @error('bankName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group text-center mb-5">
                                        <input id="branch" type="text" class="form-control @error('branch') is-invalid @enderror" name="branch" value="{{ old('branch') }}" autocomplete="branch" placeholder="Enter Branch Name ...">

                                        @error('branch')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group text-center mb-5">
                                        <input id="accountNumber" type="text" class="form-control @error('accountNumber') is-invalid @enderror" name="accountNumber" value="{{ old('accountNumber') }}" required autocomplete="accountNumber" placeholder="Enter Account Number Name ...">

                                        @error('accountNumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                            @endif
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                <button id="prevBtn" onclick="nextPrev(-1)" class="btn btn-solid">Previous</button>
                                <button id="nextBtn" type="button" onclick="nextPrev(1)" class="btn btn-solid">Next</button>
                                </div>
                            </div>
                            @if($url == 'merchant')
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span> 
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    
    document.getElementById("nextBtn").innerHTML = "Submit";
    
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
    document.getElementById("formStatus").setAttribute('class', 'cuerrent');
  }
  if(n == (x.length -1)){
    document.getElementById("nextBtn").setAttribute('type', 'submit');
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
@endsection
