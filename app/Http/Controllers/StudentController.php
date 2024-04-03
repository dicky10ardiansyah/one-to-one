<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Tampilkan Data
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    // Simpan Data
    public function store(Request $request)
    {
        $student = Student::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        $student->studentDetail()->create([
            'alter_phone' => $request->alter_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no,
        ]);

        return redirect('students')->with('message', 'Student and Student Details Created.');
    }

    // Edit data
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    public function update(Student $student, Request $request)
    {
        $student->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        $student->studentDetail()->update([
            'alter_phone' => $request->alter_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no,
        ]);

        return redirect('students')->with('message', 'Student and Student Details Updated.');
    }

    // Hapus Data
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('students')->with('message', 'Student and Student Details Deleted.');
    }

    //Edit Details Student
    public function addEditDetails($student_id)
    {
        $student = Student::findOrFail($student_id)->studentDetail;
        return view('student.addedit-detail', compact('student', 'student_id'));
    }

    public function storeOrUpdateDetail(Request $request, $student_id)
    {
        $student = Student::findOrFail($student_id);
        $student->studentDetail()->updateOrCreate(
            [
                'student_id' => $student_id,
            ],
            [
                'alter_phone' => $request->alter_phone,
                'course' => $request->course,
                'roll_no' => $request->roll_no,
            ]
        );

        return redirect('students')->with('message', 'Saved Successfully.');
    }
}
