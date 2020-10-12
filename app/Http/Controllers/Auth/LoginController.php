<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/calorie';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function authenticate()
    {
        $email = 'guestuser@example.com';
        $password = 'gstusr01';

        if (\Auth::attempt(['email' => $email, 'password' => $password])) {
            // 認証に成功した
            return redirect('/');
        }
        return back();
    }
}