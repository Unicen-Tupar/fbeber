<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 10:29:40
         compiled from "./templates/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10837323915471bf04c16f93-30043066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57ed4ca47fb865220b8ffe94f63dd30b17e3fc15' => 
    array (
      0 => './templates/form.tpl',
      1 => 1416993865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10837323915471bf04c16f93-30043066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5471bf04ccf8a6_48489336',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5471bf04ccf8a6_48489336')) {function content_5471bf04ccf8a6_48489336($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<img id="top" src="./img/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Agregar Modelo</a></h1>
		<form id="formComments" class="appnitro"  method="post" action="">
			<ul >
				<li id="li_1" >
					<label class="description" for="element_1">id coleccion</label>
					<span>
						<input id="id_coleccion" name= "id_coleccion" class="element text" maxlength="20" size="20" value=""/>
					</span>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Nombre Modelo</label>
					<span>
						<input id="nombre_modelo" name= "nombre_modelo" class="element text" maxlength="20" size="20" value=""/>
					</span>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Img modelo</label>
					<span>
						<input type="file" id="imageFile" name="img_modelo">
						<p class="help-block">Soporta: jpg, png</p>
						<button id="uploadImage" type="submit" class="btn btn-default">Guardar</button>
					</span>
				</li>
			</ul>
		</form>	
		
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>