<?php

namespace App\Http\Controllers;

use App\Course;
use App\Subject;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();

        return view('Teacher.list', compact('teacher'));
    }

    public function create()
    {
        $subject = Subject::all();
        $course = Course::all();
        return view('Teacher.add', compact('subject', 'course'));
    }

    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->subject_id = $request->subject;
        $teacher->save();
        $teacher->course()->attach($request->course);
        return redirect()->route('teacher');
    }

    public function edit($id)
    {
        $subject = Subject::all();
        $course = Course::all();
        $teacher = Teacher::find($id);
        return view('Teacher.edit', compact('subject', 'course', 'teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->name = $request->name;
        $teacher->subject_id = $request->subject;
        $teacher->save();
        $teacher->course()->detach();
        $teacher->course()->attach($request->course);
        return redirect()->route('teacher');
    }

    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        $teacher->course()->detach();
        return redirect()->route('teacher');

    }
}
