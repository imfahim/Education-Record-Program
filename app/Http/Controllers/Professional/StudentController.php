<?php

namespace App\Http\Controllers\Professional;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

use App\StudentDetail;

class StudentController extends Controller
{
    //
    public function index(){
      $students = StudentDetail::with('student')->get();

      $professionals = DB::table('rel_students_professionals')->join('professional_details','rel_students_professionals.professional_id','=','professional_details.prof_id')->get();
      //$students =DB::table('student_details')->join('students','student_details.student_id','=','students.id')->join('rel_students_professionals','student_details.student_id','=','rel_students_professionals.student_id')->where('rel_students_professionals.professional_id','=',Session::get('id'))->get();
      //dd($students);
      //return view('professional.student.index')->withStudents($students);
      return view('professional.student.index')->with('students', $students)->withProfs($professionals);
    }

    public function iep_report($id){
      $student = StudentDetail::with('student')->where('student_id', $id)->first(['firstname', 'lastname']);
      //$reports=DB::table()
      return view('professional.student.iep')->withId($id)->with('student', $student);
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

    public function centre_students_index(){
      $students = DB::table('rel_students_professionals')
        ->join('student_details', 'rel_students_professionals.student_id', '=', 'student_details.student_id')
        ->join('centres', 'student_details.added_by', '=', 'centres.centre_id')
        ->where('rel_students_professionals.professional_id', Session::get('id'))
        ->get(['student_details.id as id', 'student_details.student_id as student_id', 'firstname', 'lastname', 'student_details.created_at', 'centre_name']);

        //dd(Session::get('id'));
        //dd($students);
      return view('professional.student.centre.index')->with('students', $students);
    }

    public function personal_students_index(){
        $students = DB::table('rel_students_professionals')
          ->join('student_details', 'rel_students_professionals.student_id', '=', 'student_details.student_id')
          ->join('professionals', 'student_details.added_by', '=', 'professionals.id')
          ->where('rel_students_professionals.professional_id', Session::get('id'))
          ->get(['student_details.id as id', 'student_details.student_id as student_id', 'firstname', 'lastname', 'student_details.created_at']);

        return view('professional.student.personal.index')->with('students', $students);
    }
}
