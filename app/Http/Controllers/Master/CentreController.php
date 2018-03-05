<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;



class CentreController extends Controller
{
    //
    public function index(){
      $centres=DB::table('centres')->get();
      return view('master.centres.index')->withCentres($centres);
    }
    public function create(){
      return view('master.centres.create');
    }
    public function store(Request $request){
      $flag=DB::table('centres')->insert(['centre_name'=>$request->name,'centre_email'=>$request->email,'centre_password'=>$request->password,'centre_phone'=>$request->phone,'centre_address'=>$request->address]);
      if($flag){
        Session::flash('success', 'Centre has been added successfully !');
      }
      else{
        Session::flash('fail', 'Centre added failed !');
      }

      return redirect()->route('master.centre.index');

    }
    public function delete(Request $request){
      $flag=DB::table('centres')->where('centre_id',$request->id)->delete();
      if($flag){
        Session::flash('success', 'Successfully Deleted !');
      }
      else{
        Session::flash('fail', 'Delete failed !');
      }

      return redirect()->route('master.centre.index');
    }
}
