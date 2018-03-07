<?php

namespace App\Http\Controllers\Professional;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

class StudentController extends Controller
{
    //
    public function index(){
      return view('professional.student.index');
    }

    public function search(Request $request){
      $students=DB::table('student_details')->where('firstname','LIKE','%'.$request->search.'%')->OrWhere('lastname','LIKE','%'.$request->search.'%')->get();
      $listed=DB::table('prof_req')->where('prof_id',Session::get('id'))->get();
      return view('professional.student.search')->withStudents($students)->withReqs($listed);
    }
    public function req(Request $request){
      $flag=DB::table('prof_req')->insert(['prof_id'=>Session::get('id'),'stu_id'=>$request->id]);
      if($flag){
        Session::put('success','Request sent Successfully!!');
      }
      else{
        Session::put('fail','Request sent Failed!!');
      }

      return redirect()->route('professional.student.index');

    }
}
