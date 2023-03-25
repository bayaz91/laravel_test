<?php 

namespace Aprendible\FirstPackage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class FirstPackageServiceProvider extends ServiceProvider
{

    public function boot(){
      /* Route::get('hello-route',function(){

        return 'ok';
       });  */


       $this->loadRoutesFrom(__DIR__.'/../routes/web.php');


    }

    public function register(){
        $this->app->bind('first-package',function(){
            return new Hello;

        });

    }
}