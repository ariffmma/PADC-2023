<?php

namespace App\Exports;
use App\Models\User;
use App\Models\team;
use Auth;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class teamExport implements FromView
{
    public function view(): View
    {
        $users = User::orderBy('created_at','desc')->where('id','!=',Auth::id())->where('team',true)->get();
        return view('backend.teams.teamtable',compact('users'));
    }
}
