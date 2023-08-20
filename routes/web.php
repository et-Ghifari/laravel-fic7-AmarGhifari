<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('apps.ecommerce-dashboard', ['type_menu' => '']);
});

// auth
Route::get('/forgot-password', function () {
    return view('auths.forgot-password', ['type_menu' => 'auths']);
});
Route::get('/login', function () {
    return view('auths.login', ['type_menu' => 'auths']);
});
Route::get('/login2', function () {
    return view('auths.login2', ['type_menu' => 'auths']);
});
Route::get('/register', function () {
    return view('auths.register', ['type_menu' => 'auths']);
});
Route::get('/reset-password', function () {
    return view('auths.reset-password', ['type_menu' => 'auths']);
});

// forms
Route::get('/advanced-form', function () {
    return view('forms.advanced-form', ['type_menu' => 'forms']);
});
Route::get('/editor', function () {
    return view('forms.editor', ['type_menu' => 'forms']);
});
Route::get('/validation', function () {
    return view('forms.validation', ['type_menu' => 'forms']);
});
