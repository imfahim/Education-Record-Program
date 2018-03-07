<?php

namespace App\Http\Controllers\Centre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use Carbon\Carbon;

use App\Student;
use App\StudentDetail;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$students = StudentDetail::with('student')->with('centre')->get();
        $students = StudentDetail::with('student')->get();

        return view('centre.student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centre.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Student::create([
          'studentid' => $request->stdid,
          'password' => bcrypt($request->password),
        ]);

        $student_detail = new StudentDetail;

        $student_detail->student_id = $student->id;

        $student_detail->added_by = Session::get('logged_in');
        $student_detail->added_by_db = 'centres';

        $student_detail->firstname = $request->fname;
        $student_detail->lastname = $request->lname;
        $student_detail->gender = $request->gender;

        $formatted_date = str_replace('/', '-', $request->dob);
        $student_detail->dob = Carbon::createFromFormat('d-m-Y', $formatted_date)->format('Y-m-d');

        $student_detail->father_name = $request->fatherfname.' '.$request->fatherlname;
        $student_detail->father_mobile = $request->fathermobile;
        $student_detail->father_email = $request->fatheremail;
        $student_detail->mother_name = $request->motherfname.' '.$request->motherlname;
        $student_detail->mother_mobile = $request->mothermobile;
        $student_detail->mother_email = $request->motheremail;

        $student_detail->height = $request->height;
        $student_detail->weight = $request->weight;
        $student_detail->mother_tongue = $request->tongue;
        $student_detail->diagnosis = $request->diagnosis;
        $student_detail->com_level = $request->com_level;
        $student_detail->class_or_section = $request->class;
        $student_detail->identified_interest = $request->interests;
        $student_detail->associated_condition = $request->condition;
        $student_detail->status = $request->status;
        $student_detail->primary_goal = $request->primary;
        $student_detail->secondary_goal = $request->secondary;

        $student_detail->iq_score = $request->iq;

        $formatted_date = str_replace('/', '-', $request->iq_date);
        $student_detail->iq_test_date = Carbon::createFromFormat('d-m-Y', $formatted_date)->format('Y-m-d');

        $student_detail->sq_score = $request->sq;

        $formatted_date = str_replace('/', '-', $request->sq_date);
        $student_detail->sq_test_date = Carbon::createFromFormat('d-m-Y', $formatted_date)->format('Y-m-d');


        $student_detail->save();

        Session::flash('success', 'Successfully Added !');
        return redirect()->route('centre.student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student_detail = StudentDetail::with('student')->where('id', $id)->first();
        //dd($student_detail);
        $date = explode('-', $student_detail->dob);
        $age = Carbon::createFromDate($date[0], $date[1], $date[2])->diff(Carbon::now())->format('%y years, %m months and %d days');
        return view('centre.student.show')->with('student_details', $student_detail)->with('age', $age);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        if($request->command === 'activate'){
          $student = Student::find($id);

          $student->status = 0;

          $student->save();

          return redirect()->back();
        }

        if($request->command === 'deactivate'){
          $student = Student::find($id);

          $student->status = 1;

          $student->save();

          return redirect()->back();
        }

    }
}
