<?php
require_once "Middleware.php";

class AuthMiddleware extends Middleware
{
  public function execute($next)
  {
    if (isset($_SESSION["loggedUser"])) {
      $next();
    } else {
      header("Location: ./login");
    }
  }
}
