<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectCreateController extends Controller
{
    public function subjectCreate(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'subject_name' => 'required',
            'subject_code' => 'required',
            'description' => 'required',
        ]);


        $subject = Subject::create([
            'course_id' => $request->input('course_id'),
            'subject_name' => $request->input('subject_name'),
            'subject_code' => $request->input('subject_code'),
            'description' => $request->input('description'),
        ]);

        if($subject)
        {
            return redirect()->back()->with('success', '  successfully Created');
        }
        else
        {
            return redirect()->back()->with('error', ' Fail To Create');
        }


    }
}
