<?php

use App\Http\Controllers\Admin\AddTeacherController;
use App\Http\Controllers\Admin\AdminViewController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\Admin\CourseCreateController;
use App\Http\Controllers\Teachers\SubjectCreateController;
use App\Http\Controllers\Teachers\TeacherViewController;
use App\Http\Controllers\Teachers\TeacherMessageController;
use App\Http\Controllers\Teachers\TopicCreateController;
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


//login route section
Route::post('/signin-data', [AuthLoginController::class, 'signinData'])->name('signin.data');
Route::post('/signup-data', [AuthLoginController::class, 'signupData'])->name('signup.data');
Route::get('/logout', [AuthLoginController::class, 'logout'])->name('logout');


//communication route section
// Route::middleware(['auth'])->group(function () {

//     Route::post('/message-send', [MessageController::class, 'sendMessage'])->name('message.send');
//     Route::get('/messages', [MessageController::class, 'getMessages'])->name('messages');
// });

Route::post('/message/send', [MessageController::class, 'sendMessage'])->name('send.message');
Route::post('/message/reply', [MessageController::class, 'replyMessage'])->name('message.reply');
Route::get('/message-view/{id}', [MessageController::class, 'viewMessages']);


// admin route section
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
        Route::get( '/add-teacher-view', 'addTeacherView')->name('add.teacher.view');
    });
});

Route::post('/course-create', [CourseCreateController::class, 'courseCreate'])->name('course.create');
Route::post('/add-teacher', [AddTeacherController::class, 'addTeacher'])->name('add.teacher');





// teacher section start here


// Add these routes




Route::controller(TeacherViewController::class)->group(function () {

    Route::middleware(['teacher'])->group(function () {

        Route::get( '/subject-create-view', 'subjectCreateView')->name('subject.create.view');
        Route::get( '/topic-create-view', 'topicCreateView')->name('topic.create.view');
        Route::get( '/all-courses', 'allCourses')->name('all.courses');
        Route::get( '/attend', 'attendance')->name('student.attendance');
        Route::get( '/batch', 'studentBatch')->name('student.batch');
        Route::get( '/assign', 'assignments')->name('assignments');
        Route::get( '/assign-review', 'assignmentsReview')->name('assignments.review');
        Route::get( '/lecture', 'lectureSummary')->name('lecture.summary');
        Route::get( '/convo', 'teachersMessage')->name('teacher.message');
        Route::get( '/teacher-profile', 'teacherProfile')->name('teacher.profile');
        Route::put( '/teacher-profile-update/{id}', 'teacherProfileUpdate');
        Route::get( '/std-perf', 'studentPerformance')->name('student.performance');
        Route::get( '/overall-course', 'overallCourseProgress')->name('overall.course.progress');

        Route::post('/message-send', [TeacherMessageController::class, 'sendMessage'])->name('teacher.sendMessage');
        Route::post('/message-reply', [TeacherMessageController::class, 'replyMessage'])->name('teacher.message.reply');
        Route::get('/teacher-message-view/{id}', [TeacherMessageController::class, 'viewMessages']);
    });
    Route::view('/dummy', 'teacher.dummydata');

});

Route::post('/subject-create', [SubjectCreateController::class, 'subjectCreate'])->name('subject.create');
Route::post('/topic-create', [TopicCreateController::class, 'topicCreate'])->name('topic.create');


