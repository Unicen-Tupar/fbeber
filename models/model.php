<?php

class model
{
  public $db;

  public function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=gimnasio;charset=utf8','root','');
  }

  public function getActividades(){ //todas las actividades
    $actividades = array();
    $consulta = $this->db->prepare("SELECT * FROM actividad");
    $consulta->execute();
    while($actividad = $consulta->fetch(PDO::FETCH_ASSOC)) {
      $consultaImagenes = $this->db->prepare("SELECT * FROM img_actividad where id_act=?");
      $consultaImagenes->execute(array($actividad['id']));
      $imagenes_actividad = $consultaImagenes->fetchAll();
      $actividad['imagenes'] = $imagenes_actividad;
      $actividades[]=$actividad;
    }
    return $actividades;
  }
  public function getUser($email){
    $user = array();
    $select = $this->db->prepare('SELECT * FROM usuario WHERE email=?');
    $select->execute(array($email));
    $usuario=$select->fetchAll(PDO::FETCH_ASSOC);
    return $usuario;
  }
  //no deberia ir de igual forma
  public function getUsuarios(){ //actividad
    $select = $this->db->prepare("SELECT * FROM usuario");
    $select->execute();
    $usuarios=$select->fetchAll(PDO::FETCH_ASSOC);
    return $usuarios;
  }
  //comentarios
public function getComact($id){ //profesores por actividad (seccion act)
    $select = $this->db->prepare("SELECT c.comentario, c.puntaje, c.id_usuario, a.nombre,u.apyno FROM comentario c, actividad a, usuario u WHERE c.id_act=a.id AND c.id_act=? AND c.id_usuario=u.id");
    $select->execute(array($id));
    $comact=$select->fetchAll(PDO::FETCH_ASSOC);
    return $comact;
  }
  
  public function getActividad($id){ //actividad
    $select = $this->db->prepare("SELECT * FROM actividad WHERE id=?");
    $select->execute(array($id));
    $actividad=$select->fetchAll(PDO::FETCH_ASSOC);
    return $actividad;
  }

  public function getProfeact($id){ //profesores por actividad (seccion act)
    $select = $this->db->prepare("SELECT p.id,p.apyno, p.foto, p.horarios, a.nombre as nombreAct FROM profesor p, actividad a WHERE p.id_act=a.id AND p.id_act=?");
    $select->execute(array($id));
    $profeact=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profeact;
  }

  public function getProfesores(){ //profesores (seccion nosotros)
    $select = $this->db->prepare("SELECT p.id, a.nombre as nombreAct, p.apyno, p.foto, p.descripcion from profesor p, actividad a where p.id_act=a.id");
    $select->execute();
    $profesores=$select->fetchAll(PDO::FETCH_ASSOC);
    return $profesores;
  }

  public function getComentarios(){ //opiniones
    $select = $this->db->prepare("SELECT c.comentario, c.puntaje, u.apyno, a.nombre FROM comentario c, usuario u, actividad a WHERE c.id_usuario=u.id and c.id_act=a.id");
    $select->execute();
    $comentarios=$select->fetchAll(PDO::FETCH_ASSOC);
    return $comentarios;
  }

//inscribir usuario a una actividad
  public function agregaInscripcion($new_idProfe_i,$new_idUser_i){
  $consulta = $this->db->prepare('INSERT INTO inscripcion(id_profe,id_usuario) VALUES(?,?)');
  $consulta->execute(array($new_idProfe_i,$new_idUser_i));
  }
}
?>
