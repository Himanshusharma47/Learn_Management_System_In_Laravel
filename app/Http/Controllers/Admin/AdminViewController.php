<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('superAdmin.courses');
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function adminProfile()
    {
        return view('superAdmin.admin_profile');
    }

     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function communication()
    {
        return view('superAdmin.communication');
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
        return view('superAdmin.students');
    }
    
     /**
     * Display the admin add category view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function teachers()
    {
        return view('superAdmin.teachers');
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
    public function addTeacher()
    {
        return view('superAdmin.add_teacher');
    }

}
