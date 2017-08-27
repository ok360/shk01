<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegisterController extends Controller
{
    public function index()
    {

        return view ('register.index');
    }
    public function formSubmit(Request $request)
    {

        $user = Sentinel::registerAndActivate($request->all ());

        $role = Sentinel::findRoleByName('customer');

        $role->users()->attach($user);

        return back ();
    }
}
