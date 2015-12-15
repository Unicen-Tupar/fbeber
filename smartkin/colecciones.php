<?php
  
include 'Controller/IndexController.php';
include_once 'config/config_app.php';

$model = new IndexModel();
$view = new IndexView();
$controller = new IndexController($model, $view);

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $controller = new IndexController();
  $controller->mostrarHomeColecciones();
}

else {
  switch ($_REQUEST[ConfigApp::$ACTION]) {
  	case ConfigApp::$ACTION_AGREGAR_FAVORITO:
      $controller = new IndexController();
      $controller->agregarFavorito();
      break;
    default:
      echo 'Pagina no encontrada';
      break;
  }
}
?>