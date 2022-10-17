<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function get_all_student()
    {
        $students = Student::all();
        // $student = Student:get();
        return view('student_manage', compact('students'));
    }

    public function get_student_by_id($id)
    {
        $student = Student::find($id);
        return view('student_edit', compact('student'));

    }

    public function edit(Request $request ,$id)
    {
        $student = Student::find($id);
        $student->fullname = $request->fullname;
        $student->birthday = $request->birthday;
        $student->address = $request->address;
        $student->save();

        return redirect('student');
    }
}
