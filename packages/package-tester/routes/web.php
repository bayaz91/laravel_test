<?php

use Illuminate\Support\Facades\Route;
require __DIR__."/../../aprendible/first-package/vendor/autoload.php";


// Main Page Route
Route::get('/', function () {
   $hello = new Aprendible\FirstPackage\Hello();
   return $hello->hello();
   return view('welcome');

});


// locale Route
//Route::get('lang/{locale}', [LanguageController::class, 'swap']);
