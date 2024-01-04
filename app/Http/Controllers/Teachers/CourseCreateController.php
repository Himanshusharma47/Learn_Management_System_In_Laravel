<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class CourseCreateController extends Controller
{
    public function courseCreate(Request $request)
    {
        $validateData = $request->validate([
            'teacher_name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'subject_name' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'description' => 'required',
            'file_path' => 'required|file|mimes:pdf,doc,docx,jpeg,jpg,png, gif,xls,xlsx',
            'timeline' => 'required|date',
        ]);

        dd($validateData);
        $fileName = time() . '_' . $request->file('file_path')->getClientOriginalName();

        $filePath = $request->file('file_path')->storeAs('public/courses', $fileName);


        $course = Course::create([
            'teacher_name' => $request['teacher_name'],
            'course' => $request['course'],
            'subject_name' => $request['subject_name'],
            'topic' => $request['topic'],
            'description' => $request['description'],
            'file_path' => $filePath,
            'timeline' => $request['timeline'],
        ]);



        // Redirect or perform other actions as needed
        return redirect()->route('your.redirect.route');
    }
}
