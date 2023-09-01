<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('auths.login', ['type_menu' => '']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', function () {
        return view('apps.dashboard', ['type_menu' => '']);
    })->name('home')->middleware('can:dashboard');

    Route::get('profile', function () {
        return view('apps.profile', ['type_menu' => '']);
    })->name('profile')->middleware('can:dashboard');

    Route::get('registrants', function () {
        return view('apps.registrants', ['type_menu' => '']);
    })->name('registrants')->middleware('can:registrants');

    Route::resource('user', UserController::class)->middleware('can:users');
});

// auth
// Route::get('/forgot-password', function () {
//     return view('auths.forgot-password', ['type_menu' => 'auths']);
// });
// Route::get('/login', function () {
//     return view('auths.login', ['type_menu' => 'auths']);
// });
// Route::get('/login2', function () {
//     return view('auths.login2', ['type_menu' => 'auths']);
// });
// Route::get('/register', function () {
//     return view('auths.register', ['type_menu' => 'auths']);
// });
// Route::get('/reset-password', function () {
//     return view('auths.reset-password', ['type_menu' => 'auths']);
// });

// forms
// Route::get('/advanced-form', function () {
//     return view('forms.advanced-form', ['type_menu' => 'forms']);
// });
// Route::get('/editor', function () {
//     return view('forms.editor', ['type_menu' => 'forms']);
// });
// Route::get('/validation', function () {
//     return view('forms.validation', ['type_menu' => 'forms']);
// });
