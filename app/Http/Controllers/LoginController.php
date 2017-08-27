<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
class LoginController extends Controller
{
    public function index()
    {
        return view ('login.index');
    }
    public function formSubmit(Request $request)
    {
         $check =  Sentinel::authenticate($request->all ());
        return dd ($check);
    }

}
