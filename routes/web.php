<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/','welcome')->name('home');
/*
Route::get('profile',function(){
        $username ='Salar';
        $email = 'Salar@gmail.com';

        return view('setting.userProfile')
                ->with('username',$username)
                ->with('email',$email);
})->name('setting.profile'); */
Route::get('profile', function () {
    $username = 'Salar';
    $email = 'Salar@gmail.com';

    return view('setting.userProfile')
            ->with('username', $username)
            ->with('email', $email);
})->name('setting.profile');
