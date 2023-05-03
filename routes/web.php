<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Route::get('/',
//
//

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
return Redirect('/');
});;
Route::get('/test', function () {
    return view('test');
});
