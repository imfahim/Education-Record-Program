<?php

namespace App\Http\Controllers\Professional;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Session;

use App\StudentDetail;

class LoginController extends Controller
{
    //
    public function index(){
      $students = DB::table('rel_students_professionals')->where('professional_id', Session::get('id'))->get(['student_id']);
      $student_details = [];
      //dd(count($students));
/*
      for($i = 0; $i < count($students); $i++){
        $student_details->push(StudentDetail::with('student')->where('student_id', $students[$i])->first());
      }
*/
/*
      foreach ($students as $id) {
        $stdObj = StudentDetail::where('student_id', $id)->first();
        dd($stdObj);
        $student_details[] = $stdObj;
      }
*/
      //dd($student_details);
      return view('professional.index');
    }

    public function login(){

        return view('professional.login');

    }

    public function authenticate(Request $request){
      $prof=DB::table('professionals')->where('email',$request->email)->where('password',$request->password)->where('status',0)->first();
      $name = DB::table('professional_details')->where('prof_id', $prof->id)->first(['fname', 'lname']);
      $fullname = $name->fname.' '.$name->lname;

      if($prof){
        Session::put('success','Logged In Successfully');
        Session::put('type','professional');
        Session::put('id',$prof->id);
        Session::put('name', $fullname);
        //dd(Session::get('type'));

        Session::flash('success', 'Successfully Logged In !');
        return redirect()->route('professional.index');
      }
      else{
        Session::put('fail','Credentials Incorrect');
        return redirect()->route('professional.login');
      }
    }
}
