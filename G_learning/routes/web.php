<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get("/",[HomeController::class,"index"]);
Route::get("/add-admin",[HomeController::class,"createAdmin"])->name('addAdmin');
Route::get("/manage-admin",[HomeController::class,"manageAdmin"])->name('manageAdmin');

Route::get("/admin-controller",[AdminController::class,"index"]);
Route::get("/add-course",[AdminController::class,"addCourse"])->name('addCourse');
Route::get("/manage-course",[AdminController::class,"manageCourse"])->name('manageCourse');
