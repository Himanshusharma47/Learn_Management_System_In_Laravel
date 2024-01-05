<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseCreateController extends Controller
{
    public function courseCreate(Request $request)
    {
        // 'teacher_name' => 'required|string|max:255',
        // 'course' => 'required|string|max:255',
        $validateData = $request->validate([
            'course_name' => 'required|string|max:255',
            'course_code' => 'required|string|max:255',
            'teacher_id' => 'required',
            'students' => 'required',
            'duration' => 'required',
        ]);

        // // dd($validateData);
        // $fileName = time() . '_' . $request->file('file_path')->getClientOriginalName();

        // $filePath = $request->file('file_path')->storeAs('public/courses', $fileName);


        Course::create([
            'course_name' => $request['course_name'],
            'course_code' => $request['course_code'],
            'teacher_id' => $request['teacher_id'],
            'students' => $request['students'],
            'duration' => $request['duration'],
        ]);



        // Redirect or perform other actions as needed
        return redirect()->back()->with('success', 'Course Create Successfully');
    }
}
