<?php

namespace App\Http\Controllers;

use App\Score;
use App\Student;
use App\Subject;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index()
    {
        $score = Score::all();
        return view('Score.list', compact('score'));
    }

    public function create()
    {
        $student = Student::all();
        $subject = Subject::all();
        return view('Score.add',compact('student','subject'));
    }

    public function store(Request $request)
    {
        $score = new Score();
        $score->score = $request->score;
        $score->student_id = $request->student;
        $score->subject_id = $request->subject;
        $score->save();
        return redirect()->route('score');
    }

    public function edit($id)
    {
        $student = Student::all();
        $subject = Subject::all();
        $score = Score::find($id);
        return view('Score.edit', compact('score','subject','student'));
    }

    public function update(Request $request, $id)
    {
        $score = Score::find($id);
        $score->name = $request->name;
        $score->student_id = $request->student;
        $score->subject_id = $request->subject;
        $score->save();
        return redirect()->route('score');
    }

    public function destroy($id)
    {
        $score = Score::find($id);
        $score->delete();
        return redirect()->route('score');
    }
}
