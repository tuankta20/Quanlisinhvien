<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('Student.list', compact('students'));
    }

    public function create()
    {
        $class = Classes::all();
        return view('Student.add', compact('class'));
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('name');
        $student->sex = $request->input('sex');
        $student->date = $request->input('date');
        $student->class_id = $request->input('class');
        $student->save();

        return redirect()->route('student');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $class = Classes::all();

        return view('Student.edit', compact('student','class'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->sex = $request->input('sex');
        $student->date = $request->input('date');
        $student->class_id = $request->input('class');
        $student->save();
        return redirect()->route('student');
    }

    public function show($id)
    {
        $student = Student::find($id);
        return;

    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student');
    }
}
