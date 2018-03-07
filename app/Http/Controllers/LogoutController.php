<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        if($request->isMethod('POST')){

          if($request->type === 'centre'){

            $this->attemptLogout($request);

            Session::flash('success', 'Successfully Logged Out !');
            return redirect()->route("centre.login");
          }

          if($request->type === 'professional'){

            $this->attemptLogout($request);

            Session::flash('success', 'Successfully Logged Out !');
            return redirect()->route("centre.login");
          }

          if($request->type === 'student'){

            $this->attemptLogout($request);

            Session::flash('success', 'Successfully Logged Out !');
            return redirect()->route("centre.login");
          }

        }else{
          return redirect()->back();
        }

    }

    private function attemptLogout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
    }
}
