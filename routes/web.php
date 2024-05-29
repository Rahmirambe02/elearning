<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);
// Route untuk menampilkan halaman student
Route::get('admin/student', [StudentController::class, 'index']);
// Route untuk menampilkan halaman courses
Route::get('admin/courses', [CoursesController::class, 'index']);
// Route untuk menampilkan halaman form tambah student
Route::get('admin/student/create', [StudentController::class, 'create']);
// Route untuk mengirim data student baru
Route::post('admin/student/store', [StudentController::class, 'store']);
// Route untuk menampilkan halaman form edit student
Route::get('/admin/student/edit/{id}', [StudentController::class, 'edit']);