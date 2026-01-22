<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/basic', function () {
    return view('layouts.basic');
});

Route::post('/send-email', [ContactController::class, 'sendemail']) ->name('send.email');

Route::get('/message-sent', function () {
    return view('message-sent');
});