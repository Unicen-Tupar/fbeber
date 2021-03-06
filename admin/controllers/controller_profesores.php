<?php
require('views/view_profesores.php');
require('models/model_profesores.php');

class controller_profesores
{
  private $view_profesores;
  private $model_profesores;

  public function __construct(){
    $this->view_profesores = new view_profesores();
    $this->model_profesores = new model_profesores();
  }

//consulta profesores con la actividad correspondiente
  public function profesores(){
    $actividades = $this->model_profesores->getActividades();
    $profesores = $this->model_profesores->getProfesores();
    $this->view_profesores->mostrarProfesores($profesores,$actividades);
  }

//consulta profesores + todas las actividades para poder mostrar en los formularios
  public function profeactividades(){
    $actividades = $this->model_profesores->getActividades();
    if(isset($_REQUEST['id_profe'])){
      $id=$_REQUEST['id_profe'];
      $profesor = $this->model_profesores->getProfesor($id);
      $this->view_profesores->mostrarProfeActividades($actividades,$profesor);
    }
  }


//BORRAR consulta de profesores
  public function profesor(){
    if(isset($_REQUEST['id_profesor'])){
      $id=$_REQUEST['id_profesor'];
      $profesor = $this->model_profesores->getProfesor($id);
      $this->view_profesores->mostrarProfesor($profesor);
    }
  } 
  public function borrarProfesor(){
    if(isset($_REQUEST['id_profe'])){
      $this->model_profesores->borrarProfesor($_REQUEST['id_profe']);
    }
    else{
      $this->view_profesores->mostrarError('El profesor que intenta borrar no existe');
    }
    $this->profesores();
  }

//consulta usuarios por profesor // NEW
  public function usuariosprofesor(){
    if(isset($_REQUEST['id_profesor'])){
      $id=$_REQUEST['id_profesor'];
      $profesor = $this->model_profesores->getProfesor($id);
      $inscriptos = $this->model_profesores->getUsuariosprofesor($id);
      $this->view_profesores->mostrarUsuariosprofesor($inscriptos,$profesor);
    }
  } 
//ABM PROFESORES

//agrega
  //la pass se guarda con una encriptacion md5
  public function agregarProfesor(){
    if(isset($_REQUEST['new_apyno_p']) && isset($_REQUEST['new_email_p']) && isset($_REQUEST['new_pass_p']) && isset($_REQUEST['new_dni_p']) && isset($_REQUEST['new_descripcion_p']) && isset($_REQUEST['new_horarios_p']) && isset($_REQUEST['new_id_act_p'])){
        $this->model_profesores->agregarProfesor($_REQUEST['new_apyno_p'], $_REQUEST['new_email_p'],md5($_REQUEST['new_pass_p']),$_REQUEST['new_dni_p'],$_REQUEST['new_descripcion_p'], $_REQUEST['new_horarios_p'], $_REQUEST['new_id_act_p']);      
      }
    else{
      $this->view_profesores->mostrarError('cuack');
    }
    $this->profesores();
  }

//modifica
  public function modificarProfesor(){
    if(isset($_REQUEST['upd_apyno_p']) && isset($_REQUEST['upd_email_p']) && isset($_REQUEST['upd_pass_p']) && isset($_REQUEST['upd_dni_p']) && isset($_REQUEST['upd_descripcion_p']) && isset($_REQUEST['upd_horarios_p'])  && isset($_REQUEST['upd_id_act_p']) && isset($_REQUEST['upd_permisos_p']) && isset($_REQUEST['id_profe'])){
        $this->model_profesores->modificarProfesor($_REQUEST['upd_apyno_p'], $_REQUEST['upd_email_p'],md5($_REQUEST['upd_pass_p']), $_REQUEST['upd_dni_p'], $_REQUEST['upd_descripcion_p'],$_REQUEST['upd_horarios_p'], $_REQUEST['upd_id_act_p'], $_REQUEST['upd_permisos_p'] ,$_REQUEST['id_profe']);
    }   
    else{
      $this->view_profesores->mostrarError('El profesor que intenta modificar no existe');
    }
    $this->profesores();
  }
}
?>