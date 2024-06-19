<?php

use App\Http\Controllers\LeadsController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\PagesControllers;
use App\Http\Controllers\StudentController;

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

/*Authencation*/

//Route::get('login', [AuthController::class, 'index'])->name('login');

Route::get('/', [AuthController::class, 'index'])->name('login');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout/{id}', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

	/*Dashboard*/
		
		Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

	/*Navigation*/ 
		
		Route::get('navigation/manage', [NavigationController::class, 'index'])->name('navigation.manage');
		Route::get('navigation/create', [NavigationController::class, 'create'])->name('navigation.create');
		Route::post('navigation/store', [NavigationController::class, 'store'])->name('navigation.store');
		Route::get('navigation/edit/{id}',[NavigationController::class, 'edit'])->name('navigation.edit');
		Route::post('navigation/update', [NavigationController::class, 'update'])->name('navigation.update'); 
		Route::post('navigation/destroy', [NavigationController::class, 'destroy'])->name('navigation.destroy');
		Route::get('navigation/managajax', [NavigationController::class, 'managajax'])->name('navigation.managajax');
		
		Route::post('navigation/getNavigation', [NavigationController::class, 'getNavigation'])->name('navigation.getNavigation');

	/*Navigation*/
	
		/*Home page*/
			Route::get('Pages/manage', [PagesControllers::class, 'index'])->name('Pages.manage');
			Route::post('Pages/update', [PagesControllers::class, 'update'])->name('Pages.update');
			Route::get('dashboard/school', [DashboardController::class, 'school'])->name('dashboard.school');
		/*home Page*/
	
	/*Student*/
		Route::get('student/manage', [StudentController::class, 'index'])->name('student.manage');
		Route::post('student/getStudents', [StudentController::class, 'getStudents'])->name('student.getStudents');
		
		

	/*Student*/
	
	

	

});









