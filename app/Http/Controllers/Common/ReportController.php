<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(Request $request, $id)
    {
        //
        $month = $request->month;

        $student = DB::table('student_details')
          ->join('centres', 'centres.centre_id', '=', 'student_details.added_by')
          ->where('student_id', $id)
          ->first();

        $reports = DB::table('report')
          ->join('professional_details', 'professional_details.prof_id', '=', 'report.professional_id')
          ->where('report.student_id', $id)
          ->where('report.month', $month)
          ->get();

        //dd($report);
        return view('common.reports.index')
          ->with('student', $student)
          ->with('reports', $reports)
          ->with('month', $month);
    }
}
