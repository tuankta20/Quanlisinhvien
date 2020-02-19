<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all();
        return view('Course.list', compact('course'));
    }

    public function create()
    {
        return view('Course.add');
    }

    public function store(Request $request)
    {
        $course = new Course();
        $course->name = $request->name;
        $course->save();
        return redirect()->route('course');
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('Course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->name = $request->name;
        $course->save();
        return redirect()->route('course');
    }

    public function destroy($id)
    {
        $sourse = Course::find($id);
        $sourse->delete();
        return redirect()->route('course');
    }
}
