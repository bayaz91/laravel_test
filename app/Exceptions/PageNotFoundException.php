<?php

namespace App\Exceptions;

use Exception;

class PageNotFoundException extends Exception
{
    public function report()
    {
    }

    public function render()
    {
        return view('errors.page-not-found');
    }
}

