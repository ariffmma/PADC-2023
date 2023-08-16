<?php

namespace App\Http\Controllers;
use App\Models\email;
use App\Models\team;
use App\Mail\unduhMail;
use App\Mail\catalogMail;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{

    public function index()
    {
        return view('frontend.home');
    }
    
    public function agatha()
    {
        return view('frontend.agatha');
    }
    
    public function wendy()
    {
        return view('frontend.wendy');
    }

    public function last_edition()
    {
        return view('frontend.last-editions');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function download( $filename = '' )
    {
        // Check if file exists in app/storage/file folder
        $file_path = public_path() . "/downloads/" . $filename;
        $headers = array(
            'Content-Type: application/pdf',
            'Content-Disposition: attachment; filename='.$filename,
        );
        if ( file_exists( $file_path ) ) {
            // Send Download
            return \Response::download( $file_path, $filename, $headers );
        } else {
            // Error
            exit( 'Requested file does not exist on our server!' );
        }
    }
    

    public function unduh(Request $request){
        email::create([
            'email' => $request->email,
        ]);
        $email = $request->email;

            $data = ([
                'email' => $request->email,
                ]);
          $mail = Mail::to($email)->send(new unduhMail($data));

        return response()->json([
            'message'   => 'The download link will be sent to your email shortly',
            'message3'  => 'Please check the spam folder in case you can not find it ',
            'message2'  => 'Thank You!'
            
         
           ]);

    }
    
    public function unduhcatalog(Request $request){
        email::create([
            'email' => $request->email,
        ]);
        $email = $request->email;

            $data = ([
                'email' => $request->email,
                ]);
          $mail = Mail::to($email)->send(new catalogMail($data));

        return response()->json([
            'message'   => 'The download link will be sent to your email shortly',
            'message3'  => 'Please check the spam folder in case you can not find it ',
            'message2'  => 'Thank You!'
            
         
           ]);

    }
    
    public function sitemap()
    {
        return view('frontend.sitemap');
    }
}
