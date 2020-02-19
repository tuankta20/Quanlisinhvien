<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subject = Subject::all();
        return view('Subject.list', compact('subject'));
    }

    public function create()
    {
        return view('Subject.add');
    }

    public function store(Request $request)
    {
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->save();
        return redirect()->route('subject');
    }

    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('Subject.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->name = $request->name;
        $subject->save();
        return redirect()->route('subject');
    }

    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();
        return redirect()->route('subject');
    }
}
