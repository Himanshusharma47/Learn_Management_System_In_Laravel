<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherViewController extends Controller
{
     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function courseCreate()
    {
        return view('teacher.course_create');
    }

    
     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function allCourses()
    {
        return view('teacher.all_courses');
    }

    
     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function attendance()
    {
        return view('teacher.attendance');
    }

    
     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function studentBatch()
    {
        return view('teacher.student_batch');
    }

    
     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function assignments()
    {
        return view('teacher.assignments');
    }

    
     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function assignmentsReview()
    {
        return view('teacher.assignments_review');
    }

    
     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function lectureSummary()
    {
        return view('teacher.lecture_summary');
    }

    
     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function teachersConvo()
    {
        return view('teacher.teachers_convo');
    }

    
     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function teacherProfile()
    {
        return view('teacher.teacher_profile');
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function studentPerformance()
    {
        return view('teacher.student_performance');
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function overallCourseProgress()
    {
        return view('teacher.overall_course_progress');
    }

    
}
