<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('stu_report',[App\Http\Controllers\StudentController::class,'stu_reports'])->name('reports');
Route::get('add_student',[App\Http\Controllers\StudentController::class,'add_students'])->name('students');

Route::post('insert_stu',[App\Http\Controllers\StudentController::class,'insert_stu']);
