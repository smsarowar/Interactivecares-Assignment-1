<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages.home');
})->name('home');
Route::get('/login',function (){
    return view('Auth.login');
})->name('login');
Route::get('/register',function (){
    return view('Auth.register');
})->name('register');
Route::get('/category',function (){
    return view('Pages.Category.category');
})->name('category');
Route::get('/single_category',function (){
    return view('Pages.Category.single');
})->name('single_category');

Route::get('/profile',function (){
    return view('Pages.Profile.profile',['page'=>'profile']);
})->name('profile');
