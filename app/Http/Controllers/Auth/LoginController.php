<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    }
     /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }
    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        $remember_me = $request->has('remember_me')? true: false;
        if(auth()->attempt(['email'=>$request->email, 'password'=>$request->password],$remember_me)){
            
            $user = auth()->user();
        }
        else{
            return back();
        }
        
        $role = $user->role->name;
        $redirectRoutes=[
            'Admin' =>'/dashboard',
            'Kế toán' =>'/dashboard',
            'Bác sĩ' =>'/dashboard',
            'Lễ tân' =>'/dashboard',
            'Quản lý' =>'/dashboard',
            'user' => '/capso/capsomoi_user'
        ];
        return redirect($redirectRoutes[$role]);
    }
}
