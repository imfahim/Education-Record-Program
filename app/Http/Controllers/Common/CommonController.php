<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\ProfessionalDetail;

class CommonController extends Controller
{
    public function professional_profile_show($id)
    {
        //$professional = ProfessionalDetail::with('professional')->where('prof_id', $id)->first();
        $professional = DB::table('professional_details')
          ->join('professionals', 'professional_details.prof_id', '=', 'professionals.id')
          ->join('centres', 'professional_details.centre_id', '=', 'centres.centre_id')
          ->where('professional_details.prof_id', $id)
          ->first();
        //dd($professional);
        return view('professional.profile')->with('professional', $professional);
    }
}
