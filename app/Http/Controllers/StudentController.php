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

    public function edit($id)
    {
        $student = Student::find($id);

        return view('edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->update([
            'name'  => $request->name,
            'email' => $request->email,
            'age'   => $request->age
        ]);

        return redirect('/show');
    }
}