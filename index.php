<?php
require_once "src/core/autoload.php";
require_once "src/core/config.php";
require_once "src/app/Controllers/HomeController.php";
session_start();
if (isset($_GET["view"])) {
  require_once "src/app/Views/" . $_GET["view"] . ".php";
} else if (isset($_GET["action"]) && isset($_GET["class"])) {
  $controller = $_GET["class"] . "Controller";
  $action = $_GET["action"];

  require_once "src/app/Controllers/" . $controller . ".php";

  $controller = new $controller();
  $controller->$action();
} else {
  $hc = new HomeController();
  $hc->index();
}
