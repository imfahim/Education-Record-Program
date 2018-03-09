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
      $students =DB::table('student_details')->join('students','student_details.student_id','=','students.id')->join('rel_students_professionals','student_details.student_id','=','rel_students_professionals.student_id')->where('rel_students_professionals.professional_id','=',Session::get('id'))->get();
      //dd($students);
      return view('professional.student.index')->withStudents($students);
    }

    public function iep_report(){
      return view('professional.student.iep');
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
