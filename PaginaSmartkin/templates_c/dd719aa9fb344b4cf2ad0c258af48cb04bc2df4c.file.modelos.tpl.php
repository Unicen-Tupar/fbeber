<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 15:56:58
         compiled from "./templates/modelos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2248457465475ea3a2208c1-27971647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd719aa9fb344b4cf2ad0c258af48cb04bc2df4c' => 
    array (
      0 => './templates/modelos.tpl',
      1 => 1417003807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2248457465475ea3a2208c1-27971647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modelos' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5475ea3a388325_98070683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5475ea3a388325_98070683')) {function content_5475ea3a388325_98070683($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modelos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>          
  <img  data-toggle="modal" data-target="#myModal" class="img-thumbnail" src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_modelo'];?>
" onClick = "getDataModelos(<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_modelo'];?>
);" alt="<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre_modelo'];?>
">
  Agregar a Favoritos
  Consultar
<?php } ?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
      </div>

      <div class="modal-body text-center">
      <h3>Muestras de Dispositivos</h3>
        <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modelos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
  				<img src="./images/catalogo/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_dispositivo'];?>
" width="60px" class="zoom">
    		<?php } ?>
        <br><br><br>
        <div class="input-group">
          <span class="input-group-addon">Nombre</span>
          <input type="text" class="form-control" placeholder="Username">
        </div>
        <div class="input-group">
          <span class="input-group-addon">Correo Electronico</span>
          <input type="text" class="form-control" placeholder="email">
        </div>
        <div class="input-group">
          <span class="input-group-addon">Consulta</span>
          <input type="text" class="form-control" placeholder="Detalle dispositivo donde desea aplicar el skins">
        </div>
        <button type="submit" class="btn btn-default">Enviar consulta</button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>




 
	


	<?php }} ?>