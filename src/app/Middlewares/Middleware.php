<?php
abstract class Middleware
{
  public abstract function execute($next);
}
