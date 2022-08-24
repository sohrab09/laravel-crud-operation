<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use DB;

class RegistrationController extends Controller
{
    public function registration()
    {

        $view = DB::table('registrations')->get();

        return view('registration')->with('view', $view);
    }

    public function insertRegistration(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];

        $registration = new Registration();

        $registration->email = $email;
        $registration->password = $password;

        $registration->save();

        if ($registration->save()) {
            return redirect('/')->with('success', 'Registration Successful');
        }
    }
}
