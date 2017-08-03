<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view ('student.index');
    }
    public function create()
    {
        return view ('student.create');
    }
    public function store(Request $request)
    {
        Student::create($request->all ());

        return redirect ('/');

    }

}
