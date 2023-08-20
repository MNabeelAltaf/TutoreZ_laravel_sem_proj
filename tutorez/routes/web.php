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


use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeachingRequestsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TutorRegistration;
use App\Http\Controllers\TutorRegistrationController;
use App\Models\TeachingRequests;
use Illuminate\Routing\Router;
use PHPUnit\Runner\Hook;

Route::get('/', [HomeController::class,'Home']);


Route::get('/Home',[HomeController::class, 'Home']);
Route::get('/About', [HomeController::class , 'About']);
Route::get('/Contact', [HomeController::class, 'Contact']);

Route::get('/CSC',[HomeController::class, 'CSC']);
Route::get('/Communities',[HomeController::class, 'communities']);
Route::get('/Subjects',[HomeController::class, 'subjects']);
Route::get('/Courses',[HomeController::class, 'courses']);

Route::get('/Tutor',[HomeController::class, 'tutor']);
Route::get('/Request',[HomeController::class, 'requests']);

Route::get('/Profile1',[HomeController::class, 'profile1']);
Route::get('/Profile2',[HomeController::class, 'profile2']);
Route::get('/Discussion',[HomeController::class, 'discussion']);

Route::get('/Login',[HomeController::class, 'login']);
Route::get('/Register',[HomeController::class,'register']);


Route::get('/Admin', [AdminController::class,'admin']);

Route::get('/AdminPage', [AdminController::class,'adminPage']);





// DB 






Route::resource('DBTutorRegistration', TutorRegistration::class);


// Route::resource('DBTeachingRequests', TeachingRequestsController::class); 

Route::resource('DBTeachingRequests/', TeachingRequestsController::class);



Route::resource('DBTeachingRequests/{name}', TeachingRequestsController::class);


// Route::resource('DBTeachingRequests', TeachingRequestsController::class, ['parameters' => [
//     'DBTeachingRequests' => 'Profile1'
// ]]);



Route::resource('DBTutorRegistration', TutorRegistrationController::class);



