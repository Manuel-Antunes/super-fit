<?php

namespace App\Data;

class Connection
{
  public static function getConnection()
  {
    $database = DATA_LAYER_CONFIG['dbname'];
    $username = DATA_LAYER_CONFIG['username'];
    $senha = DATA_LAYER_CONFIG['password'];
    $driver = DATA_LAYER_CONFIG['driver'];
    $host = DATA_LAYER_CONFIG['host'];
    return new \PDO("$driver:host=$host;dbname=$database", $username, $senha);
  }
}
