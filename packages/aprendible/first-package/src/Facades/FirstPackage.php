<?php


namespace Aprendible\FirstPackage\Facades;

use Illuminate\Support\Facades\Facade;

class FirstPackage extends Facade
{

public static function getFacadeAccessor(){

return 'first-package';
}

}