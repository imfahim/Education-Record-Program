<?php

namespace App\Http\Controllers\Centre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Hash;

use App\Centre;

class LoginController extends Controller
{
    public function index()
    {
       return view('centre.login');
    }

    public function authenticate(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            $request->session()->regenerate();

            return redirect()->route('centre.index');
        }

        return redirect()->route('centre.login');
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {

        $found = Centre::where('centre_email', $request->centre_email)->get(['centre_email', 'centre_password']);

        //dd($found[0]);
        if($found){
          $pass_checked = Hash::check($request->centre_password, $found[0]->centre_password, []);
          if($pass_checked){
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
            'centre_password' => 'required|string',
        ]);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'centre_email';
    }

}
