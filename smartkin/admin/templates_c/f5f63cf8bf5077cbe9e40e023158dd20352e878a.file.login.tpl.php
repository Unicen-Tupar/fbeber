<?php /* Smarty version Smarty-3.1.14, created on 2015-11-28 15:16:35
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18560076665659b743f2dbb0-39406979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1448719930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18560076665659b743f2dbb0-39406979',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5659b7440a30a7_04482263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5659b7440a30a7_04482263')) {function content_5659b7440a30a7_04482263($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Programacion Web II</title>

    <!-- Bootstrap core CSS -->
    <link href="css\bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css\signin.css" rel="stylesheet">

  <style type="text/css"></style><style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }</style></head>

  <body>

    <div class="container">

      <form id="formlogin" class="form-signin" method="post" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <input id="email_admin" name="email_admin" type="text" class="form-control" placeholder="Email address" autofocus="">
        <input id="pass_admin" name="pass_admin" type="password" class="form-control" placeholder="Password">
        <div id="error" class="alert alert-danger" style="display: none;"></div>
        <button id="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
	  <div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4"></div>
		<div class="col-md-4"><a href="index.php"> Go to index...</a></div>
		
	  </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>


</body></html><?php }} ?>