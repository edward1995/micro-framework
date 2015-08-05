<?php
class route
{

  static function start() {

    $routes          = explode('/', $_GET['router']);
    if ($routes[0]) {
      $controller_name = "Controller".$routes[0];
    }
    elseif($routes[0]=="") {
      $controller_name = "Controllerindex";
    }
    if ($routes[1]) {
      $action_name = $routes[1];
    }
    else {
      $action_name = "index";
    }
    $model_name = "Model".$routes[0];
    

    if (file_exists($_SERVER['DOCUMENT_ROOT']."/apps/controler/".mb_strtolower($controller_name).".php")) {
      include_once $_SERVER['DOCUMENT_ROOT']."/apps/controler/".mb_strtolower($controller_name).".php";
      $controller = new $controller_name;
    }
    else {
      $controller = new Controler;
    }
    if (file_exists($_SERVER['DOCUMENT_ROOT']."/apps/model/".mb_strtolower($model_name).".php")) {
      include_once $_SERVER['DOCUMENT_ROOT']."/apps/model/".mb_strtolower($model_name).".php";
    }
    if (method_exists($controller,$action_name)) {
      $controller->$action_name();
    }
    else {
      echo route::ErrorPage404();
    }





  }

  static function ErrorPage404()
  {



    return "404";
  }



}