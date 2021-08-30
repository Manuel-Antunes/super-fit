<?php
define("DATA_LAYER_CONFIG", [
  "driver" => getenv("DB_DRIVER") != null ? getenv("DB_DRIVER") : "mysql",
  "host" => getenv("DB_HOST") != null ? getenv("DB_HOST") : "localhost",
  "port" => getenv("DB_PORT") != null ? getenv("DB_PORT") : "3306",
  "dbname" => getenv("DB_NAME") != null ? getenv("DB_NAME") : "atividade",
  "username" => getenv("DB_USER") != null ? getenv("DB_USER") : "root",
  "password" => getenv("DB_PASSWORD") != null ? getenv("DB_PASSWORD") : "",
  "options" => [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_CASE => PDO::CASE_NATURAL
  ]
]);
