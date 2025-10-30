<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group 
| which contains the "web" middleware group. Now create something great!
|
*/

// -------------------------------------------------------------
// 🔹 AUTHENTICATION SECTION
// -------------------------------------------------------------

// Show login page
Route::view('/login', 'login')->name('login');

// Process login form (dummy redirect)
Route::post('/login', function () {
    // nanti ganti dengan controller AuthController::login()
    return redirect('/dashboard');
})->name('login.process');

// Login via MyITS (dummy redirect)
Route::get('/login/myits', function () {
    return redirect('/dashboard');
})->name('login.myits');

// -------------------------------------------------------------
// 🔹 STUDENT SECTION
// -------------------------------------------------------------

// Edit & Resubmit Submission Page
Route::view('/student/submissions/edit', 'student.submissions.edit')
    ->name('student.submissions.edit');

// nanti bisa ditambah lagi, contoh:
// Route::view('/student/dashboard', 'student.dashboard')->name('student.dashboard');
// Route::view('/student/submissions', 'student.submissions.index')->name('student.submissions.index');

// -------------------------------------------------------------
// 🔹 DEFAULT / FALLBACK
// -------------------------------------------------------------

// Default page (welcome)
Route::view('/', 'welcome')->name('home');
