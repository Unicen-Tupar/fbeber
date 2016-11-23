<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/icono2.png"/> 
    <title>Gimnasio | Sitio Oficial</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

  </head>
  <body  class="text-center">
    <div class="col-md-1 icono">
      <img src="images/icono2.png" width="120px;">
    </div>
<!--primer sesion-->
<div class="col-md-5"></div>
    <div class="col-md-2 text-center">
    <h3>Iniciar Sesión</h3>
      <form id="formlogin" class="form-signin" method="post" ><br>
        <input id="email" name="email" type="text" class="form-control" placeholder="Correo elctrónico" autofocus=""><br>
        <input id="pass" name="pass" type="password" class="form-control" placeholder="Contraseña"><br>
        <div id="error" class="alert alert-danger" style="display: none;"></div>
        <button id="signin" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
      <p><br>Si aún no se encuentra en el sistema, por favor registrese</p>
    <button class="btn btn-lg btn-success btn-block" type="button" data-toggle="modal" data-target="#form_usuario">Registrarse</button>
    <br><a class="btn btn-lg btn-warning btn-block" href="index.php">Ir a la Página Oficial</a>

</div>


    <!-- Modal comentarios-->
<div class="modal fade" id="form_usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Registrarse</h3>
        <div class="modal-body">
          <h4>Complete el siguiente formulario:</h4>
          <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="txtUser" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>        </div>     
      </div>
    </div>
  </div>
</div>

<div class="col-md-5"></div>
{include file = "footer.tpl"}
