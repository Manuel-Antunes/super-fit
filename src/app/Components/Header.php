<?php

namespace App\Components;

class Header
{
  public static function show()
  {
    $username = $_SESSION["loggedUser"]["name"];
    $email = $_SESSION["loggedUser"]["email"];
    $photo = isset($_SESSION["loggedUser"]["photo"]) ? $_SESSION["loggedUser"]["photo"] : "https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png";
?>
    <style>
      #profile:hover {
        cursor: pointer;
      }
    </style>
    <div class="purple darken-4 w-100 align-items-center d-flex justify-content-between p-3 z-depth-4">
      <a href="./" class="w-50">
        <div class="logo-wrapper  container-fluid">
          <img style="min-width: 150px;" class="responsive-img w-50" src="public/img/logo.svg" alt="super fit logo">
        </div>
      </a>
      <div id="profile" data-activates="slide-out" class="w-25 justify-content-end d-flex align-items-center">
        <span class="m-1 fw-bold text-white">
          <?= $username ?>
        </span>
        <img style="min-width: 40px;" src="<?= $photo ?>" alt="" class="circle w-25"> <!-- notice the "circle" class -->
      </div>
    </div>
    <ul id="slide-out" class="side-nav">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="https://i2.wp.com/thevocalink.com/wp-content/uploads/2021/04/How-to-Start-a-Gym-or-a-Fitness-Center.jpg?fit=696%2C442&ssl=1">
          </div>
          <a href="#!user"><img class="circle" src="<?= $photo ?>"></a>
          <a href="#!name"><span class="white-text name"><?= $username ?></span></a>
          <a href="#!email"><span class="white-text email"><?= $email ?></span></a>
        </div>
      </li>
      <li><a href="#!"><i class="material-icons">share</i>Share</a></li>
      <li>
        <div class="divider"></div>
      </li>
      <li><a class="waves-effect" href="?class=Auth&action=destroy"><i class="material-icons">logout</i>Logout</a></li>
    </ul>
    <script src="public/js/header.js"></script>
<?php
  }
}
