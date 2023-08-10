<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\users_2022;
use Illuminate\Http\Request;
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

    

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
        $user = users_2022::where('email',$request->email)->first();
        if(isset($user->id)){
            $user = User::where('email',$request->email)->first();
            if(isset($user->id)){

            }else{
                $id = User::max('id');
                $id_daftar = 'PADC'.str_pad($id, 3, '0', STR_PAD_LEFT);
                User::create([
                    'name' => $user->name ,
                    'email' => $user->email,
                    'password' => $user->password,
                    'role_id'   => 2,
                    'id_daftar' => $id_daftar,
                    'follow'    => $user->follow,
                ]);
            }
            
        }else{
            
        }
       

    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
