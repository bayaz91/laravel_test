<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Admin\AdminController;


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



 //Middleware is starting
 Route::middleware([AdminPermission::class])->group(function () {
    Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {

// Main Page Route
Route::get('/admin', function () {
Log::info('Admin is login');
    return view('welcome');
})->name('system.admin.index');

Route::get('/index', [AdminController::class, 'index']);
Route::get('/getArticle', [AdminController::class, 'GetArticle']);
Route::get('/addArticle', [AdminController::class, 'AddArticle']);


}); 
}); //end for checking UserMiddleware
