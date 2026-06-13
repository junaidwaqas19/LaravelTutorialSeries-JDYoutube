<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\WelcomeController;
use App\Http\Controllers\FrontEnd\AboutUs;
use App\Http\Controllers\FrontEnd\CategoryController;
use App\Http\Controllers\FrontEnd\ContacUsController;
use App\Http\Controllers\FrontEnd\PostController;
use App\Http\Controllers\Admin\UserController;


Route::get('/',[WelcomeController::class,'index']);

Route::get('profile', function () {
    $username = 'Salar';
    $email = 'Salar@gmail.com';

    return view('setting.userProfile')
            ->with('username', $username)
            ->with('email', $email);
})->name('setting.profile');

Route::get('aboutus',[AboutUs::class,'index']);
Route::get('contactus',[ContactUsController::class,'index']);
Route::get('category',[CategoryController::class,'index']);
Route::get('post',[PostController::class,'index']);

Route::view('dashboard','adminPanel.dashboard');

Route::get('user/list',[UserController::class,'index']);
Route::get('user/add',[UserController::class,'create']);


Route::post('user/store',[UserController::class,'store']);




