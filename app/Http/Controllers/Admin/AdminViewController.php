<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

class AdminViewController extends Controller
{
     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function dashboard()
    {
        return view('superAdmin.dashboard');
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function courses()
    {
        $courseData = Course::all();
        $teacherData = User::where('role', 'teacher')->get();
        return view('superAdmin.courses', compact('courseData', 'teacherData'));
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function adminProfile()
    {
        $adminData = Auth::user();
        return view('superAdmin.admin_profile', compact('adminData'));
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function adminProfileUpdate(Request $request, $id = '')
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

            return redirect('/admin-profile');
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
    public function communication()
    {
        $teacherData = User::where('role', 'teacher')->get();
        return view('superAdmin.communication', compact('teacherData'));
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function classes()
    {
        return view('superAdmin.classes');
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function students()
    {
        $studentData = User::where('role', 'student')->get();
        return view('superAdmin.students', compact('studentData'));

    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function teachers()
    {
        $teacherData = User::where('role', 'teacher')->get();
        return view('superAdmin.teachers', compact('teacherData'));
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function reports()
    {
        return view('superAdmin.reports');
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function addTeacherView()
    {
        return view('superAdmin.add_teacher');
    }

}
