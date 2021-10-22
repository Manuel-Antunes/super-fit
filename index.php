<?php
require_once "src/core/autoload.php";
require_once "src/core/kernel.php";
require_once "src/core/config.php";
require_once "src/core/router.php";


session_start();
$router = new Router();


$router->get('/', 'HomeController.index', 'auth');
$router->post('/auth', 'AuthController.store');
$router->post('/users', 'UserController.store');
$router->get('/signup', 'AuthController.create');
$router->get('/signout', 'AuthController.destroy');
$router->get('/login', 'AuthController.edit');
$router->get('/login', 'AuthController.edit');
$router->get('/manage-evaluations', 'EvaluationsController.index');
$router->get('/manage-clients', 'UserController.index');
$router->get('/manage-exercises', 'ExercisesController.index');
$router->post('/exercises', 'ExercisesController.store');
$router->get('/manage-trains', 'TrainsController.index', 'auth');
$router->post('/media', 'MediaController.store');
// if (isset($_GET["view"])) {
//   require_once "src/app/Views/" . $_GET["view"] . ".php";
// } else if (isset($_GET["action"]) && isset($_GET["class"])) {
//   $controller = $_GET["class"] . "Controller";
//   $action = $_GET["action"];

//   require_once "src/app/Controllers/" . $controller . ".php";

//   $controller = new $controller();
//   $controller->$action();
// } else {
//   $hc = new HomeController();
//   $hc->index();
// }
