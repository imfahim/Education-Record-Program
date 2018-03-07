<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Hash;
use Session;

use App\Student;

class LoginController extends Controller
{
    public function index()
    {
       return view('student.login');
    }

    public function authenticate(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            $request->session()->regenerate();

            return redirect()->route('student.index');
        }

        return redirect()->route('student.login');
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {

        $found = Student::where('studentid', $request->stdid)->get(['id', 'studentid', 'password']);

        //dd($found[0]);
        if($found){
          $pass_checked = Hash::check($request->password, $found[0]->password, []);
          if($pass_checked){
            Session::put('logged_in', $found[0]->id);
            Session::put('type', 'student');
            return true;
          }else{
            return false;
          }
        }else{
          return false;
        }

    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'stdid';
    }
}
