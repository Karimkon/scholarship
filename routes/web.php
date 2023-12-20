<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EligibilityController;

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

Route::get('admin', [AuthController::class, 'login']); 
Route::post('login', [AuthController::class, 'AuthLogin']); 
Route::get('logout', [AuthController::class, 'logout']); 
Route::get('forgot-password', [AuthController::class, 'forgotpassword']);
Route::post('forgot-password', [AuthController::class, 'PostForgotPassword']);
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'PostReset']);

Route::get('auth/register', [AuthController::class, 'showRegistrationForm']);
Route::post('auth/register', [AuthController::class, 'register']);

 


Route::group(['middleware' => 'admin'], function () {

    //Admin urls
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']); 
    Route::get('admin/admin/list', [AdminController::class, 'list']); 
    Route::get('admin/admin/add', [AdminController::class, 'add']); 
    Route::post('admin/admin/add', [AdminController::class, 'insert']);
    Route::get('admin/admin/edit/{id}', [AdminController::class, 'edit']); 
    Route::post('admin/admin/edit/{id}', [AdminController::class, 'update']); 
    Route::get('admin/admin/delete/{id}', [AdminController::class, 'delete']); 

    //Student urls
    Route::get('admin/student/list', [StudentController::class, 'list']); 
    Route::get('admin/student/add', [StudentController::class, 'add']); 
    Route::post('admin/student/add', [StudentController::class, 'insert']);
    Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']); 
    Route::post('admin/student/edit/{id}', [StudentController::class, 'update']);
    Route::get('admin/student/delete/{id}', [StudentController::class, 'delete']);

     //Courses urls
     Route::get('admin/course/list', [CourseController::class, 'list']); 
     Route::get('admin/course/add', [CourseController::class, 'add']); 
     Route::post('admin/course/add', [CourseController::class, 'insert']);
     Route::get('admin/course/edit/{id}', [CourseController::class, 'edit']); 
     Route::post('admin/course/edit/{id}', [CourseController::class, 'update']);
     Route::get('admin/course/delete/{id}', [CourseController::class, 'delete']);

     //University urls
     Route::get('admin/university/list', [UniversityController::class, 'list']); 
     Route::get('admin/university/add', [UniversityController::class, 'add']); 
     Route::post('admin/university/add', [UniversityController::class, 'insert']);
     Route::get('admin/university/edit/{id}', [UniversityController::class, 'edit']); 
     Route::post('admin/university/edit/{id}', [UniversityController::class, 'update']);
     Route::get('admin/university/delete/{id}', [UniversityController::class, 'delete']);

     //Partners urls
     Route::get('admin/partner/list', [PartnerController::class, 'list']); 
     Route::get('admin/partner/add', [PartnerController::class, 'add']); 
     Route::post('admin/partner/add', [PartnerController::class, 'insert']);
     Route::get('admin/partner/edit/{id}', [PartnerController::class, 'edit']); 
     Route::post('admin/partner/edit/{id}', [PartnerController::class, 'update']);
     Route::get('admin/partner/delete/{id}', [PartnerController::class, 'delete']);

});

Route::group(['middleware' => 'student'], function () {
    Route::get('student/dashboard', [DashboardController::class, 'dashboard']); 
    Route::get('student/register/register', [StudentController::class, 'register']); 
    Route::get('student/register/add', [StudentController::class, 'register_post']); 
    Route::post('student/register/add', [StudentController::class, 'success']);

    //University urls
    Route::get('student/university', [UniversityController::class, 'list']); 

     //elg urls
     Route::get('student/eligibility-check', [EligibilityController::class, 'list']); 
     Route::get('student/eligibility-check/add', [EligibilityController::class, 'add']); 
     Route::post('student/eligibility-check/add', [EligibilityController::class, 'insert']);
     Route::get('student/eligibility-check/edit/{id}', [EligibilityController::class, 'edit']); 
     Route::post('student/eligibility-check/edit/{id}', [EligibilityController::class, 'update']);
     Route::get('student/partner/delete/{id}', [EligibilityController::class, 'delete']);

});

Route::get('/', [HomeController::class, 'home']);
