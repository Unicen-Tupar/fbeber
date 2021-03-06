<?php
class LoginController
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function imprimirPagina()
	{
		session_start();
		if(!isset($_SESSION["email"]))
		{
			$this->view->imprimirPagina();}
		else{
			header('Location: index.php');}
		}
	
	public function loginUsuario($formulario)
	{
	    $error = $this->verificarFormulario($formulario);
		if(!$error){
			$user = $this->model->getUsuario($formulario["email"]);
			if(empty($user))
			{
				$this->view->MensajeError("Error: Usuario Inexistente");
			} 	
			if($user[0]["pass"] != md5($formulario["pass"]))
			{
				$this->view->MensajeError("Error: Password Inválida");
			}
			session_start();
			$_SESSION["email"]=$formulario["email"];
			//$this->view->imprimirPagina();
		}
		else
		{
			$this->view->MensajeError($error);
		}
		
	}
	
	private function verificarFormulario($formulario)
	{
		if(!$this->verificaremail($formulario["email"]))
			return "Error: Email Inválido";
		if(strlen($formulario["pass"])<=0)
			return "Error: La password es vacía";
	}
	
	private function verificaremail($email){ 
	  if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$email)){ 
		  return false; 
	  } else { 
		   return true; 
	  } 
	}
}
?>