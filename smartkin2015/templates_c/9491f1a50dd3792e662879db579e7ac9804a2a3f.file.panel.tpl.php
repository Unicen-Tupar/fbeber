<?php /* Smarty version Smarty-3.1.14, created on 2015-11-20 01:00:32
         compiled from "./templates/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3250193955640ac6e2c2fb5-85681945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9491f1a50dd3792e662879db579e7ac9804a2a3f' => 
    array (
      0 => './templates/panel.tpl',
      1 => 1447977629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3250193955640ac6e2c2fb5-85681945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5640ac6e2c57a0_86502613',
  'variables' => 
  array (
    'usuario' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640ac6e2c57a0_86502613')) {function content_5640ac6e2c57a0_86502613($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                    
            <?php if (!$_smarty_tpl->tpl_vars['info']->value['bloqueado']){?>
                
                <?php echo $_smarty_tpl->getSubTemplate ("user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php }else{ ?>
            <div class="col-md-12">
                <div class="col-md-6 text-center">
                    <div class="text-center icon-user" style="background:url('./images/images_sys/anonimo.jpg') center;"><br>
                        <h3 class="h3-bloqueado">FAIL</h3>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <br><p><b>USUARIO BLOQUEADO!</b> Contáctese con el Administrador.</p> 
                </div>
                <button id="logout" class="btn btn-lg btn-primary ">Intentar de nuevo</button> 
            </div>
            <?php }?>
        <?php } ?>
<?php }else{ ?>		
	<form id="formlogin" class="form-signin" method="post" >
        <h2 class="form-signin-heading">Inciar Sesión</h2>
        <input id="email_user" name="email_user" type="text" class="form-control" placeholder="Email" autofocus="">
        <input id="pass_user" name="pass_user" type="password" class="form-control" placeholder="Password">
        <div id="error" class="alert alert-danger" style="display: none;"></div>
        <p class="text-right">Olvide mi contraseña!!</p>
        <button id="signin" class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
    </form>
    <a href="#registrarse">REGISTRARSE</a>

<?php }?>
<br>
              

        <div class="bordes col-md-12">
            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/florencia.flor.526"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
        </div>

        <div class="bordes col-md-12">
            <a class="twitter-timeline"  href="https://twitter.com/moniflopi" data-widget-id="660905774391173120">Tweets de @moniflopi.</a> 
        </div>

        <div class="bordes col-md-12">
            <h1>PUBLICIDAD</h1>
        </div>

        <div class="bordes col-md-12">
            <h1>PUBLICIDAD</h1>
        </div>

        <div class="bordes col-md-12 redes">
            <h1>PUBLICIDAD</h1>
        </div>

        <div class="bordes col-md-12 redes">
            <h1>PUBLICIDAD</h1>
        </div>

        <div class="bordes col-md-12 redes">
            <h1>PUBLICIDAD</h1>
        </div>

        <div class="bordes col-md-12 redes">
            <h1>PUBLICIDAD</h1>
        </div>
        
        <div class="bordes col-md-12 redes">
            <h1>PUBLICIDAD</h1>
        </div><?php }} ?>