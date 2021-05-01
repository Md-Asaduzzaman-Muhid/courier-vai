<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



use App\Models\Admin;
use App\Models\Merchant;
use App\Models\Rider;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:rider')->except('logout');
        $this->middleware('guest:merchant')->except('logout');
    }
    //admin
    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'is_super' => 1], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    // public function adminLogout( Request $request )
    // {
    //     if(Auth::guard('admin')->check()) // this means that the admin was logged in.
    //     {
    //         Auth::guard('admin')->logout();
    //         return redirect()->route('admin.login');
    //     }
    
    //     $this->guard()->logout();
    //     $request->session()->invalidate();
    
    //     return $this->loggedOut($request) ?: redirect('/');
    // }
   //rider
    public function showRiderLoginForm()
    {
        return view('auth.login', ['url' => 'rider']);
    }

    public function riderLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('rider')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/rider');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    //merchant
    public function showMerchantLoginForm()
    {
        return view('auth.login', ['url' => 'merchant']);
    }

    public function merchantLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('merchant')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/merchant');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
