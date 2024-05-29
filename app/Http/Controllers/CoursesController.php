<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
     // method untuk menampilkan data courses
    public function index(){
        // tarik data courses dari db
        $courses = Courses::all();

        // panggil view dan kirim data courses
        return view('admin.contents.courses.index', [
            'courses' => $courses,
        ]);
    }
}
