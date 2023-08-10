<?php

namespace App\Http\Controllers;
use App\Models\team;
use App\Models\User;
use App\Models\email;
use App\Models\email_2022;
use App\Models\team_2022;
use App\Models\users_2022;
use Auth;
use Excel;
use App\Exports\teamExport;
use App\Exports\submitexport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class teamController extends Controller
{
   
    public function index()
    {
        $users = User::orderBy('id_daftar','Asc')->where('id','!=',Auth::id())->where('team',true)->get();

        return view('backend.teams.teams', compact('users'));
    }

    public function index2022()
    {
        $user = users_2022::orderBy('id_daftar','ASC')->where('id','!=',Auth::id())->where('team',true)->get();

        return view('backend.teams.teams', compact('users'));

    }

    public function store(Request $request)
    {
     
        $user = User::where('id',Auth::id())->first();

        if($request->hasFile('ktm')){
            $imageName = '1-ktm-'.$user->id_daftar.'-'.time().'.'.$request->ktm->getClientOriginalExtension();
            $request->ktm->move(public_path('images-ktm'),$imageName);
        }
        if($request->hasFile('ktm2')){
            $imageName2 ='2-ktm-'.$user->id_daftar.'-'.time().'.'.$request->ktm2->getClientOriginalExtension();
            $request->ktm2->move(public_path('images-ktm'),$imageName2);
        }

        

        team::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'no_hp'     => $request->no_hp,
            'universitas'=>$request->universitas,
            'ktm'       => $imageName,
            'id_daftar' => $user->id_daftar
        ]);
        team::create([ 
                'name'          => $request->name2,
                'email'         => $request->email2,
                'no_hp'         => $request->no_hp2,
                'universitas'   => $request->universitas,
                'ktm'           => $imageName2,
                'id_daftar'     => $user->id_daftar
    
            ]);
        $user->update([
            'team' => true,
        ]);    
    }

     public function update(Request $request){
        $team = team::where('id_daftar',$request->id_daftar)->get();
        $i=0;
        $user = User::where('id',Auth::id())->first();

        foreach($team as $team){
            
            $teamupdate = team::where('id',$team->id)->first();
            $teamupdate2 = team::where('id_daftar',$request->id_daftar)->where('id','!=',$team->id)->first();
            if($request->hasFile('ktm_3')){
                if(file_exists(public_path('images-ktm/') .  $teamupdate->ktm)){
                    unlink(public_path('images-ktm/') .  $teamupdate->ktm);
                }
                $imageName = '1-ktm-'.time().'-'.$user->id_daftar.'.'.$request->ktm_3->getClientOriginalExtension();
                $request->ktm_3->move(public_path('images-ktm'),$imageName);
            }else{
                $imageName= $teamupdate->ktm;
            }
            if($request->hasFile('ktm_7')){
                if(file_exists(public_path('images-ktm/') .  $teamupdate2->ktm)){
                    unlink(public_path('images-ktm/') .  $teamupdate2->ktm);
                }
                $imageName2 ='2-ktm-'.time().'-'.$user->id_daftar.'.'.$request->ktm_7->getClientOriginalExtension();
                $request->ktm_7->move(public_path('images-ktm'),$imageName2);
            }else{
                $imageName2 = $teamupdate2->ktm;
            }
            $teamupdate->update([
                'universitas' => $request->universitas,
                'name' => $request->name_0,
                'email'=> $request->email_1,
                'no_hp'=> $request->no_hp_2,
                'ktm'  => $imageName
            ]);
           
            $teamupdate2->update([
                'universitas' =>$request->universitas,
                'name' => $request->name_4,
                'email' => $request->email_5,
                'no_hp' => $request->no_hp_6,
                'ktm'   => $imageName2
            ]);
                
            if(++$i == 1){
            break;
            }
       
        }
        
    }
    
    public function Emaillist(){
         $users = Email::get();

        return view('backend.emails.email', compact('users'));
    }

    public function Emaillist2022(){
        $users = email_2022::get();
        return view('backend.emails.email', compact('users'));
    }

    public function follow_yes($id){
        $user = User::where('id',$id)->first();
        $user->update([
            'follow' => true,
        ]);

        return back();
    }

    public function follow_no($id)
    {
        $user = User::where('id',$id)->first();
        $user->update([
            'follow' =>false,
        ]);

        return back();
    }

    public function submitExport()
    {
        return Excel::download(new submitexport,'submit.xlsx');
    }

    public function teamExport() 
    {
        return Excel::download(new teamExport, 'team.xlsx');
    }
    
  

}
