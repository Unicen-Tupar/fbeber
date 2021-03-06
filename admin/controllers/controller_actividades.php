<?php
require_once('controller.php');
require('views/view_actividades.php');
require('models/model_actividades.php');

class controller_actividades
{
  private $view_actividades;
  private $model_actividades;

  public function __construct(){
    $this->view_actividades = new view_actividades();
    $this->model_actividades = new model_actividades();
  }

  //consulta todas las actividades->OK
  public function actividades(){
    $actividades = $this->model_actividades->getActividades();
    $this->view_actividades->mostrarActividades($actividades);
  }


//consulta una actividad en especial->OK
  public function actividad(){
    if(isset($_REQUEST['id_actividad'])){
      $id=$_REQUEST['id_actividad'];
      $actividad = $this->model_actividades->getActividad($id);
      $this->view_actividades->mostrarActividad($actividad);
    }
  } 

//consulta profesores por actividad //cuando borra->OK
  public function profeact(){
    if(isset($_REQUEST['id_actividad'])){
      $id=$_REQUEST['id_actividad'];
      $actividad = $this->model_actividades->getActividad($id);
      $profeact = $this->model_actividades->getProfeact($id);
      $this->view_actividades->mostrarProfeact($profeact,$actividad);
    }
  }

//consulta comentarios por actividad // NEW
  public function comentariosact(){
    if(isset($_REQUEST['id_actividad'])){
      $id=$_REQUEST['id_actividad'];
      $actividad = $this->model_actividades->getActividad($id);
      $comact = $this->model_actividades->getComact($id);
      $this->view_actividades->mostrarComact($comact,$actividad);
    }
  } 

//consulta imagenes por actividad 
  public function imagesAct(){
    if(isset($_REQUEST['id_act'])){
      $id=$_REQUEST['id_act'];
      $imagesact = $this->model_actividades->getImagesAct($id);
      $this->view_actividades->mostrarImagesAct($imagesact);
    }
  } 
//************************************************************************************
  public function borrarImagen(){
    if(isset($_REQUEST['id_img'])){
      $this->model_actividades->borraImagen($_REQUEST['id_img']);
      $this->imagesAct();
    }
    else{
      $this->view_actividades->mostrarError('La imagen que intenta borrar no existe');
    }
  }
//************************************************************************************
//ABM ACTIVIDADES

//agrega -> OK (falta imagenes)
  /*public function agregarActividad(){
    if(isset($_REQUEST['new_nombre_a']) && isset($_REQUEST['new_descripcion_a'])){
        $this->model_actividades->agregarActividad($_REQUEST['new_nombre_a'], $_REQUEST['new_descripcion_a'],$_FILES['imagesToUpload']);      
      }
    else{
      $this->view_actividades->mostrarError('cuack');
    }
    $this->actividades();
  }*/
public function agregarActividad(){
    //print_r($_FILES['image']);
    if (isset($_POST['new_nombre_a']) && $_POST['new_descripcion_a']){
      $imagenes = [];
      if(isset($_FILES['image'])){
      for($i=0; $i<count($_FILES['image']['name']);$i++)
      {
        if(($_FILES['image']['size'][$i]>0) && ($this->esImagen($_FILES['image']['type'][$i])))
        {
            $image_name = $_FILES['image']['name'][$i];
            $image_tmp = $_FILES['image']['tmp_name'][$i];
            $image['name']=$image_name;
            $image['tmp_name']=$image_tmp;
            $imagenes[] = $image;
        }
      }

      }
      $act = $_POST['new_nombre_a'];
      $description = $_POST['new_descripcion_a'];
      $this->model_actividades->agregarActividad($act,$description,$imagenes);
    }
        $actividades = $this->model_actividades->getActividades();
    $this->view_actividades->mostrarActividades($actividades);

  }
     private function esImagen($file_type){
      return ($file_type =='image/jpeg' || $file_type =='image/png' );
  }
//borra->OK
  public function borrarActividad(){
    if(isset($_REQUEST['id_act'])){
      $this->model_actividades->borrarActividad($_REQUEST['id_act']);
    }
    else{
      $this->view_actividades->mostrarError('La actividad que intenta borrar no existe');
          }
    $this->actividades();
  }

//modifica->OK
  public function modificarActividad(){
    if(isset($_REQUEST['upd_nombre_a']) && isset($_REQUEST['upd_descripcion_a']) && isset($_REQUEST['id_act']) && isset($_FILES['imagesToUpload'])){
      $this->model_actividades->modificarActividad($_REQUEST['upd_nombre_a'], $_REQUEST['upd_descripcion_a'],$_REQUEST['id_act'],$_FILES['imagesToUpload']);
    }   
    else{
      echo 'La actividad que intenta modificar no existe';
    }
    $this->actividades();
  }

}
?>