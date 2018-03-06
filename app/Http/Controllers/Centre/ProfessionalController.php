<?php

namespace App\Http\Controllers\Centre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Validation\Rule;

class ProfessionalController extends Controller
{
    //
    public function index(){
      $professionals=DB::table('professionals')->join('professional_details','professionals.id','=','professional_details.prof_id')->get();
      return view('centre.professional.index')->withProfessionals($professionals);
    }
    public function create(){
      $centres=DB::table('centres')->get();
      return view('centre.professional.create')->withCentres($centres);
    }
    public function store(Request $request){
      $this->validate($request,[
        'fname' => 'required',
        'lname' => 'required',
        'profession' => ['required',Rule::notIn(['-1']),],
        'qualifications' => ['required',Rule::notIn(['-1']),],
        'centre' => ['required',Rule::notIn(['-1']),],
        'mobile' =>'required',
        'email' =>'required|email',
        'tongue' => ['required',Rule::notIn(['-1']),],
      ]);

      if($request->prof_other != "" ){
        $profession=$request->prof_other;
      }
      else{
        $profession=$request->profession;
      }
      if($request->qual_other != "" ){
        $qualification=$request->qual_other;
      }
      else{
        $qualification=$request->qualifications;
      }

      $new_id=DB::table('professionals')->insertGetId(['email'=>$request->email,'password'=>$request->password,]);

      $flag=DB::table('professional_details')->insert([
        'prof_id'=>$new_id,
        'fname'=>$request->fname,
        'lname'=>$request->lname,
        'profession'=>$profession,
        'qualifications'=>$qualification,
        'centre_id'=>$request->centre,
        'mobile'=>$request->mobile,
//        'dob'=>$request->DoB,
        'gender'=>$request->gender,
        'mother_tongue'=>$request->tongue,
      ]);
      if($flag){
        Session::flash('success', 'Professionals has been added successfully !');
      }
      else{
        Session::flash('fail', 'Professionals added failed !');
      }

      return redirect()->route('centre.professional.index');
    }

    public function delete(Request $request){
      $flag=DB::table('professionals')->where('id',$request->id)->update(['status'=>$request->stat]);
      if($flag){
        Session::flash('success', 'Successfully Deleted !');
      }
      else{
        Session::flash('fail', 'Delete failed !');
      }

      return redirect()->route('centre.professional.index');
    }

}
