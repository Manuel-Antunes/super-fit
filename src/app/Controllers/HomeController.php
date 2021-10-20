<?php

class HomeController
{

  public function index()
  {
    if (isset($_SESSION["loggedUser"])) {
      require_once "src/app/Views/home.php";
    } else {
      require_once "src/app/Views/login.php";
    }
  }
}
