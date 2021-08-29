<?php
session_start();

if (isset($_GET["view"])) {
  require_once "src/app/views/" . $_GET["view"] . ".php";
} else if (isset($_GET["action"]) && isset($_GET["class"])) {
  $controller = $_GET["class"] . "Controller";
  $action = $_GET["action"];

  require_once "src/app/controllers/" . $controller . ".php";

  $controller = new $controller();
  $controller->$action();
} else if (isset($_SESSION["loggedUser"])) {
  require_once "src/app/views/home.php";
} else {
  require_once "src/app/views/login.php";
}