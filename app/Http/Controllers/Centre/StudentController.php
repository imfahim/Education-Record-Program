<?php

namespace App\Http\Controllers\Centre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //
    public function index(){
      return view('centre.student.index');
    }
    public function create(){
      return view('centre.student.create');
    }
}
