<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Admin\CoachController;
use App\Http\Controllers\Admin\CoachRouteController;
use App\Http\Controllers\Admin\BookTicketController;


use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\LoginController as UserLoginController;
use App\Http\Controllers\User\RegisterController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputFormController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [HomeController::class, 'index']) -> name('home');
Route::get('/inputform/{count?}',[InputFormController::class, 'index'])-> name('inputform');
Route::post('/inputform/{count?}',[InputFormController::class, 'inputSubmit']) -> name('inputSubmit');
Route::get('/editform/{count}/id/{id}',[InputFormController::class, 'editform'])-> name('editform');
Route::post('/editform/{count}/id/{id}',[InputFormController::class, 'editSubmit'])-> name('editSubmit');
Route::get('/order/{id}',[OrderController::class, 'order'])-> name('orderform');
Route::post('/order/{id}',[OrderController::class, 'orderSubmit'])-> name('orderSubmit');
Route::get('/groupTicket',function(){
    return view('home.bookticket.groupticket');
})-> name('groupTicket');

//User Panel
Route::group(['prefix'=>'/user'],function(){
    Route::get('/', [HomeController::class, 'index']) -> name('user.home');
    //Auth
    Route::get('/login',[UserLoginController::class,'login'])->name('user.login.form');
    Route::post('/login',[UserLoginController::class,'loginSubmit'])->name('user.login.submit');
    Route::get('/logout',[UserLoginController::class,'logout'])->name('user.logout');
    Route::get('/dashboard', [UserDashboardController::class, 'index']) -> name('user.dashboard');
    Route::get('/orderinfo', [OrderController::class, 'index']) -> name('user.orderinfo');
    Route::get('/register',[RegisterController::class,'register'])->name('user.register.form');
    Route::post('/register',[RegisterController::class,'registerSubmit'])->name('user.register.submit');
});

//Admin Panel
Route::group(['prefix'=>'/admin'],function(){
    Route::get('/', [AdminLoginController::class, 'login']) -> name('admin.index');
    Route::match(['get', 'post'], '/login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::match(['get', 'post'], '/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::middleware(['auth', 'role'])->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index']) -> name('admin.dashboard');
    });

    Route::group(['prefix'=>'/user'],function(){
        Route::get('/list', [UserController::class, 'index']) -> name('admin.user.list');
    });

    Route::group(['prefix'=>'/province'],function(){
        Route::get('/list', [ProvinceController::class, 'index']) -> name('admin.province.list');
    });

    Route::group(['prefix'=>'/coach'],function(){
        Route::get('/list', [CoachController::class, 'index']) -> name('admin.coach.list');
    });

    Route::group(['prefix'=>'/coachroute'],function(){
        Route::get('/list', [CoachRouteController::class, 'index']) -> name('admin.coachroute.list');
    });

    Route::group(['prefix'=>'/order'],function(){
        Route::get('/list', [BookTicketController::class, 'index']) -> name('admin.order.list');
    });
    
});