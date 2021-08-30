<?php
class Connection
{
  public static function getConnection()
  {
    $database = "atividade";
    $username = "root";
    $senha = "";
    return new PDO("mysql:host=127.0.0.1;dbname=$database", $username, $senha);
  }
}
