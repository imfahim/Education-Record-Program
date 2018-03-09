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

    public function iep_report($id){
      //$reports=DB::table()
      return view('professional.student.iep')->withId($id);
    }
    public function iep_post(Request $request){
      $flag=DB::table('report')->insert([
        'student_id'=>$request->stu_id,
        'professional_id'=>Session::get('id'),
        'month' =>$request->month,
        'skill_area'=>$request->int_sk,
        'present_level'=>$request->present_level,
        'goal'=>$request->goal,
        'strategy'=>$request->strategy,
        'remarks'=>$request->remarks,
      ]);

      if($flag){
        Session::put('success','Report Submitted');
      }
      else{
        Session::put('fail','submission Fail');
      }

      return redirect()->route('professional.student.iep',[$request->stu_id]);
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
