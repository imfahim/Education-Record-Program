<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CentreController extends Controller
{
    //
    public function index(){
      return view('master.centres.index');
    }
    public function create(){
      return view('master.centres.create');
    }
}
