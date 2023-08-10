<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\team;
use App\Models\email;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $countuser = count(User::where('role_id',2)->get());
        $countteam = count(User::where('role_id',2)->where('team',1)->get());
        $countsubmit = count(User::where('role_id',2)->where('link','!=',NUll)->get());
        $countemail = count(Email::get());
        $registertoday  = count(User::wheremonth('created_at',date('m'))->where('created_at',date('d'))->get());
        return view('backend.dashboard',compact('countuser','countteam','countsubmit','countemail','registertoday'));
    }

    
}
