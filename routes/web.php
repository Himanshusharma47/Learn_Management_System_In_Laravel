<?php

use App\Http\Controllers\Admin\AdminViewController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\Teachers\CourseCreateController;
use App\Http\Controllers\Teachers\TeacherViewController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\MessageConverter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login_form');
});

Route::post('/signin-data', [AuthLoginController::class, 'signinData'])->name('signin.data');
Route::post('/signup-data', [AuthLoginController::class, 'signupData'])->name('signup.data');
Route::get('/logout', [AuthLoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {

    Route::post('/message-send', [MessageController::class, 'sendMessage'])->name('message.send');
    Route::get('/messages', [MessageController::class, 'getMessages'])->name('messages');
});

Route::controller(AdminViewController::class)->group(function () {

    Route::middleware(['admin'])->group(function () {

        Route::get( '/dash', 'dashboard')->name('dashboard');
        Route::get( '/course', 'courses')->name('courses');
        Route::get( '/admin-profile', 'adminProfile')->name('admin.profile');
        Route::put( '/admin-profile-update/{id}', 'adminProfileUpdate');
        Route::get( '/communication', 'communication')->name('communication');
        Route::get( '/student', 'students')->name('students');
        Route::get( '/teacher', 'teachers')->name('teachers');
        Route::get( '/report', 'reports')->name('reports');
        Route::get( '/add-teacher', 'addTeacher')->name('add.teacher');
    });
});

Route::controller(TeacherViewController::class)->group(function () {

    Route::middleware(['teacher'])->group(function () {

        Route::get( '/courses', 'courseCreate')->name('course.create');
        Route::get( '/all-courses', 'allCourses')->name('all.courses');
        Route::get( '/attend', 'attendance')->name('student.attendance');
        Route::get( '/batch', 'studentBatch')->name('student.batch');
        Route::get( '/assign', 'assignments')->name('assignments');
        Route::get( '/assign-review', 'assignmentsReview')->name('assignments.review');
        Route::get( '/lecture', 'lectureSummary')->name('lecture.summary');
        Route::get( '/convo', 'teachersConvo')->name('teacher.convo');
        Route::get( '/teacher-profile', 'teacherProfile')->name('teacher.profile');
        Route::put( '/teacher-profile-update/{id}', 'teacherProfileUpdate');
        Route::get( '/std-perf', 'studentPerformance')->name('student.performance');
        Route::get( '/overall-course', 'overallCourseProgress')->name('overall.course.progress');

    });
    Route::view('/dummy', 'dummydata');

});

Route::post('/course-create', [CourseCreateController::class, 'courseCreate'])->name('course.create');
