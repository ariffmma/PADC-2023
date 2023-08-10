<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\team;
use App\Models\users_2022;
use App\Models\team_2022;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        $users = User::orderBy('created_at','asc')->where('id','!=',Auth::id())->where('team',1)->get();

        return view('backend.users.users', compact('users'));
    }

    public function index2022()
    {
        $users = users_2022::orderBy('created_at','asc')->where('id','!=',Auth::id())->where('team',1)->get();

        return view('backend.users.users', compact('users'));
    }
    
    public function alluser()
    {
        $users = User::orderBy('id_daftar','desc')->where('id','!=',Auth::id())->get();
        return view('backend.users.users',compact('users'));
    }

    public function alluser2022()
    {
        $users = users_2022::orderBy('id_daftar','desc')->where('id','!=',Auth::id())->get();
        return view('backend.users.users', compact('users'));
    }

    public function userNoteam()
    {
        $users = User::orderBy('created_at','asc')->where('id','!=',Auth::id())->where('team',0)->get();

        return view('backend.users.users', compact('users'));
        
    }

    public function userNoteam2022()
    {
        $users = users_2022::orderBy('created_at','asc')->where('id','!=', Auth::id())->where('team',0)->get();

        return view('backend.users.users', compact('users'));
    }

    public function validation($id)
    {
        
        $user = User::findOrFail($id);
        $user->update([
            'status'      => true,           
        ]);   
        return back();
    }

    public function unvalidation($id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'status'      => false,           
        ]);   
        return back();
    }

    public function show($id){
        $user = User::where('id',$id)->first();
        $teams = team::where('id_daftar',$user->id_daftar)->get();
        return view('backend.users.team', compact('teams'));
    }

    public function profile(){
        $user = User::where('id',Auth::id())->first();
        $team = team::where('id_daftar',$user->id_daftar)->get();
        $getuniv = team::where('id_daftar',$user->id_daftar)->first();
        if($user->follow == 0){
            return view('frontend.follow',compact('user','team','getuniv')); 
        }else{
        return view('frontend.profile',compact('user','team','getuniv')); 
        }
    }

    public function link_store(Request $request){
        $user = User::findOrFail($request->id);
        $user->update([
            'link' => $request->link,
        ]);
        
    } 
    
      public function featured($id)
    {
        $news = User::where('id_daftar',$id)->first();
        $news->update([
            'status'      => true,           
        ]);   
        return back();
    } 

    public function unfeatured($id)
    {
        $news = User::where('id_daftar',$id)->first();
        $news->update([
            'status'      => false,           
        ]);   
        return back();
    } 

}
