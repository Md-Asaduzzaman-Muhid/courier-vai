<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\Admin;
use App\Models\Merchant;
use App\Models\Rider;
use App\Models\Company;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:rider');
        $this->middleware('guest:merchant');
    }
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }
    public function showRiderRegisterForm()
    {
        return view('auth.register', ['url' => 'rider']);
    }
    public function showMerchantRegisterForm()
    {
        return view('auth.register', ['url' => 'merchant']);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'phone' => ['required', 'string', 'min:11', 'max:14'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function createAdmin(Request $request)
    {
        // dd($request);
        $this->validator($request->all())->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => '01763228277222',
            'address' => 'abc address',
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }
    protected function createRider(Request $request)
    {
        $this->validator($request->all())->validate();
        $rider = Rider::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => '01763228277',
            'address' => 'abc address',
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/rider');
    }
    protected function createMerchant(Request $request)
    {
        $this->validator($request->all())->validate();
        // dd($request);

        $merchant = Merchant::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            
            'address' => $request['nid'],
            'address' => $request['area'],
            'password' => Hash::make($request['password']),
        ]);
        $merchant->company()->create([
            'address' => $request['address'],
            'company_name' =>  $request['cName'],
            'company_url' =>  $request['cUrl'],
            'payment_type' =>  $request['payment'],
            'account_holder' =>  $request['accountHolder'],
            'bank_name' =>  $request['bankName'],
            'branch' =>  $request['branch']
        ]);
        return redirect()->intended('login/merchant');
    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => '01763228277',
            'address' => 'abc address',
            'password' => Hash::make($data['password']),
        ]);
    }
}
