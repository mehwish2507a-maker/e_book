<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        Student::create([
            'name'  => $request->name,
            'email' => $request->email,
            'age'   => $request->age,
        ]);

        return redirect('/show');
    }

    public function show()
    {
        $students = Student::all();
        return view('fetch', compact('students'));
    }
}