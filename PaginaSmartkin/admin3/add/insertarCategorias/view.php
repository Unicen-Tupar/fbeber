<?php
require('./libs/Smarty.class.php');
class View
{
     
    public function imprimirPagina(){
       
		$smarty = new Smarty;
		$smarty->display('form.tpl');
    }
	
	 public function MensajeExito(){
     
		echo "Categoria agregada!";
    }
	
	 public function MensajeError($error){
		echo $error;
    }
}
?>