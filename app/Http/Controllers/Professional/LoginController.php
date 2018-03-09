<?php

namespace App\Http\Controllers\Professional;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

class LoginController extends Controller
{
    //
    public function index(){
      return view('professional.index');
    }

    public function login(){

        return view('professional.login');

    }

    public function authenticate(Request $request){
      $prof=DB::table('professionals')->where('email',$request->email)->where('password',$request->password)->where('status',0)->first();
      
      if(count($prof)==1){
        Session::put('success','Logged In Successfully');
        Session::put('type','professional');
        Session::put('id',$prof->id);
        //dd(Session::get('type'));
        return redirect()->route('professional.index');
      }
      else{
        Session::put('fail','Credentials Incorrect');
        return redirect()->route('professional.login');
      }
    }
}
