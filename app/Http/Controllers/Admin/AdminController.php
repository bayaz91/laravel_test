<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Events\AdminProcessed;
use DB;
use SequenceTrait;
use App\Rules\Password;

class AdminController extends Controller
{
        /**
     * Call Event and Listener
     * Return View
     */
    public function index()
    {
        event(new AdminProcessed());
     return view('welcome');
    }



      /**
     * Select All Article 
     */
    public function GetArticle(){
     $titles=DB::able('article')->select('title,writer')->get();


     return view('admin.articles',compact('titles'));
    }


    /**
     * Insert New Article
     * Select All Article 
     */

    public function AddArticle(){
          

        $request->validate(
            ['password' => ['required', 'numeric', new Password()]],
            [
                'password.required'  => @Lang::get('validation.fields.missing-password'),
                'password.numeric'   => @Lang::get('validation.fields.no-correct-password'),
            ]
        );

        $id = $this->sequence();

        $newArticle = new Article();
        $newArticle->id = $id;
        $newArticle->name = "Laravel";
        $newArticle->writer = "Birgül";
        $newArticle->title = "Framework";
        $newArticle->save();

        $titles=DB::able('article')->select('title,writer')->get();

        return view('admin.articles',compact('titles'));
       }
   


}
