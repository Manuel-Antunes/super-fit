<?php
class Header
{
  public static function show()
  {
?>
    <div class="purple darken-4 w-100 align-items-center d-flex justify-content-between p-3 z-depth-4">
      <div class="logo-wrapper  w-50">
        <img style="min-width: 150px;" class="responsive-img w-50" src="public/img/logo.svg" alt="super fit logo">
      </div>
      <div class="w-25 justify-content-end d-flex align-items-center">
        <span class="m-3 fw-bold text-white">
          Teste
        </span>
        <img style="min-width: 40px;" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" alt="" class="circle w-25"> <!-- notice the "circle" class -->
      </div>
    </div>
<?php
  }
}
