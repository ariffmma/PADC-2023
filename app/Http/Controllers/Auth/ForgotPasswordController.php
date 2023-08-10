<?php

namespace App\Http\Controllers\Auth;
use App\Models\users_2022;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $user = users_2022::where('email', $request->only('email'))->first();
        if(isset($user->id)){
            $userModel = User::where('email', $request->only('email'))->first();
            if(isset($userModel->id)){
               
            }else{
                $id = User::max('id');
                $id_daftar = 'PADC'.str_pad($id, 3, '0', STR_PAD_LEFT);
                User::create([
                    'name' => $user->name ,
                    'email' => $user->email,
                    'password' => $user->password,
                    'role_id'   => 2,
                    'id_daftar' => $id_daftar,
                    
                ]);
               
            }
        }else{
          
        }

    }


    
    

}
