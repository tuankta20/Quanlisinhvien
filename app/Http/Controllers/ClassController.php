<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Course;
use DemeterChain\C;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $class = Classes::all();
        return view('Class.list', compact('class'));
    }

    public function create()
    {
        $course = Course::all();
        return view('Class.add',compact('course'));
    }

    public function store(Request $request)
    {
        $class = new Classes();
        $class->name = $request->name;
        $class->course_id = $request->course;
        $class->save();
        return redirect()->route('class');
    }

    public function edit($id)
    {
        $course = Course::all();
        $class = Classes::find($id);
        return view('Class.edit', compact('class','course'));
    }

    public function update(Request $request, $id)
    {
        $class = Classes::find($id);
        $class->name = $request->name;
        $class->course_id = $request->course;
        $class->save();
        return redirect()->route('class');
    }

    public function destroy($id)
    {
        $class = Classes::find($id);
        $class->delete();
        return redirect()->route('class');
    }
}
