<?php

namespace App\Helpers;
use Illuminate\Support\Str;


class UpperCase
{
  public static function Upper($word)
  {
    $string = strtoupper($word);
    return $string;
  }
}
