<?php

include_once '../config/autoload.php';
include_once '../config/routes.php';


if (!empty($_GET['action']) && isset($routes[$_GET['action']])) {

  $route = $routes[$_GET['action']];
  
  if (isset($route['controller'])) {
    include_once '../controllers/' . $route['controller'] . '.php';
    $controller = '\controllers\\' . $route['controller'];
    $objet = new $controller();
  }
  if (isset($route['action'])) {
     
    $fonctionAction = $route['action'];   
    $objet->$fonctionAction();
  }
  
} else {
    include_once '../controllers/Home.php';
   
    $posts = new \controllers\Home;
    $posts->homeAction();
  
  
}



