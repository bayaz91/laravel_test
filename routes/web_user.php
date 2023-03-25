<?php

use Illuminate\Support\Facades\Route;


 //Middleware is starting
    Route::middleware([UserPermission::class])->group(function () {
        Route::group(['prefix' => 'user', 'namespace' => 'user'], function () {
// Main Page Route
Route::get('/user', function () {
    return view('welcome');
})->name('system.user.index');


}); 
}); //end for checking UserMiddleware
