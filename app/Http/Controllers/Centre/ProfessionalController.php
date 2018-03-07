<?php

namespace App\Http\Controllers\Centre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Validation\Rule;

use App\StudentDetail;
use App\Student;
use App\Professional;

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

    public function assign($id){
      $professional = Professional::where('id', $id)->first(['id', 'email']);
      // tui professional name ta anish
      //dd($professional);
      return view('centre.professional.assign')->with('professional', $professional);
    }

    public function attemptAssign($prof_id, $std_id){

      // Check Reuqest is accepted or not

      // if accepted
      $flag = DB::table('rel_students_professionals')->insert([
        'professional_id' => $prof_id,
        'student_id' => $std_id,
      ]);

      if($flag){
        Session::flash('success', 'Successfully Assigned !');
      }else{
        Session::flash('fail', 'Error Occured !');
      }

      return redirect()->back();
      //////

      // If not accepted
    }

    public function search(Request $request){
      $students = Student::with('studentdetail')->where('studentid', 'LIKE', '%'.$request->keyword.'%')->get();

      if($students){
        Session::put('students', $students);
        Session::flash('success', 'Successfully Found !');
        return redirect()->back();
      }
      Session::flash('fail', 'Could not Found !');
      return redirect()->back();
    }

}

/*
<form class="form-horizontal form-label-left" novalidate>
  {{csrf_field()}}
<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-md-offset-3">
    <center><a href="{{ URL::previous() }}" class="btn btn-danger">Cancel</a>
    <button id="send" type="submit" class="btn btn-success">Submit</button></center>
  </div>
</div>
</form>
*/
