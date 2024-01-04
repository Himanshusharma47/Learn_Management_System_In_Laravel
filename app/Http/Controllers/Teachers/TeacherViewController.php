<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // $teacherData = User::where('email', $request->email)->first();
        $teacherData = Auth::user();
        return view('teacher.teacher_profile', compact('teacherData'));
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function teacherProfileUpdate(Request $request, $id = '')
    {
        // dd($request->all());

        try {
            $request->validate([
                'name' => 'required',
                'age' => 'required|integer|between:18,90',
            ]);

            $data = User::findOrFail($id);
            $data->name = $request->input('name');
            $data->age = $request->input('age');
            $data->save();

            return redirect('/teacher-profile');
        } catch (QueryException $e) {

            return back()->with('error', 'Database error: ' . $e->getMessage());

        } catch (\Exception $e) {

            return back()->with('error', 'An error occurred: ' . $e->getMessage());

        }
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
