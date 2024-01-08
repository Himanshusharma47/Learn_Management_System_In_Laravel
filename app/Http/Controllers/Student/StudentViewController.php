<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentViewController extends Controller
{
    public function coursePage()
    {
        return view('student.course');
    }
    public function teacherPage()
    {
        return view('student.teacher');
    }
    public function contactPage()
    {
        return view('student.contact');
    }
    public function aboutPage()
    {
        return view('student.about');
    }
    public function blogPage()
    {
        return view('student.blog');
    }
}
