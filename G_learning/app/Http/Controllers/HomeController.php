<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function createAdmin(){
        return view('admin.index');
    }
    public function manageAdmin(){
        return view('admin.manage');
    }
}
