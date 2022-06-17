<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/student-levels', function () {
    return view('admin.utilities.student-levels.index');
});

Route::get('/school-years', function () {
    return view('admin.utilities.school-years.index');
});

Route::get('/grade-levels', function () {
    return view('admin.utilities.grade-levels.index');
});

Route::get('/strands', function () {
    return view('admin.utilities.strands.index');
});

Route::get('/courses', function () {
    return view('admin.utilities.courses.index');
});

Route::get('/sections', function () {
    return view('admin.utilities.sections.index');
});

Route::get('/requirements', function () {
    return view('admin.utilities.requirements.index');
});

Route::get('/semesters', function () {
    return view('admin.utilities.semesters.index');
});

Route::get('/students', function () {
    return view('admin.students.index');
});

Route::get('/students/create', function () {
    return view('admin.students.create');
});

