<?php

namespace App\Models;

abstract class Model
{
  public abstract function toArray();
  public function toJSON()
  {
    return json_encode($this->toArray());
  }
}
