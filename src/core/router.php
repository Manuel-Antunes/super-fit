<?php
class Router
{

  private array $registredRoutes = array();

  private function match_patterns($path, $url, &$VARS)
  {
    preg_match_all("/(?:\/((?:[:])?[\w-]+))/", $path, $path_groups);
    $path_groups = $path_groups[1];
    preg_match_all("/(?:\/((?:[:])?[\w-]+))/", $url, $url_groups);
    $url_groups = $url_groups[1];
    for ($i = 0; $i < sizeof($url_groups); $i++) {
      if (isset($path_groups[$i])) {
        $path_el = $path_groups[$i];
        $url_el = $url_groups[$i];
        if ($path_el[0] === ":") {
          $VARS[$path_el] = $url_el;
          $url_groups[$i] = $path_el;
        }
      }
    }
    return $path_groups === $url_groups;
  }

  private function call_controller($controller)
  {
    [$class, $method] = explode('.', $controller);
    require_once "src/app/Controllers/" . $class . ".php";
    $class = new $class();
    $class->$method();
  }

  private function call_handler($handler, $middlewares = [], $count = 0)
  {
    for ($i = 0; $i < sizeof($middlewares); $i++) {
      $middleware = $middlewares[$i];
      $md = MIDDLEWARES[$middleware];
      require_once "src/app/Middlewares/" . $md . ".php";
      $md = new $md();
      $middlewares[$i] = $md;
    }
    if (sizeof($middlewares) !== 0) {
      $middlewares[$count]->execute(isset($middlewares[$count + 1]) ? $this->call_handler($handler, $middlewares = [], $count = $count + 1) : fn () => $this->execute_handler(($handler)));
    } else {
      $this->execute_handler(($handler));
    }
  }

  private function execute_handler($handler)
  {
    if (is_string($handler)) {
      $this->call_controller($handler);
    } else {
      $handler();
    }
  }

  public function get(string $path, $handler, ...$middlewares)
  {
    $url = isset($_GET['url']) ? '/' . $_GET['url'] : '/';
    if (in_array('GET' . $url, $this->registredRoutes, TRUE)) {
      return;
    }
    $match = $this->match_patterns($path, $url, $_REQUEST);
    if ($match && $_SERVER['REQUEST_METHOD'] === 'GET') {
      $this->call_handler($handler, $middlewares);
      array_push($this->registredRoutes, 'GET' . $url);
    }
  }

  public function post(string $path, $handler, ...$middlewares)
  {
    $url = isset($_GET['url']) ? '/' . $_GET['url'] : '/';
    if (in_array('POST' . $url, $this->registredRoutes, TRUE)) {
      return;
    }
    $match = $this->match_patterns($path, $url, $_REQUEST);
    if ($match && $_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->call_handler($handler, $middlewares);
      array_push($this->registredRoutes, 'POST' . $url);
    }
  }
}
