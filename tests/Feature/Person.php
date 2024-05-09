<?php

namespace Tests\Feature;

class Person
{
  var string $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
}
