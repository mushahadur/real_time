<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addCourse(){
        return view('course.index');
    }
    public function manageCourse(){
        return view('course.manage');
    }
}
