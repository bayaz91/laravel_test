<?php
namespace Aprendible\FirstPackage;

class Hello{

    protected $name;

public function __construct($name = "Sindy")
{
  $this->name=$name;
}

public function hello(){
    echo "This is my first package,{$this->name}";
}


}