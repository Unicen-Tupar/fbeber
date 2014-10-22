<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="">

	    <title>Smartkin</title>

	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
    
  	</head>

  	<body>

	    <div class="container">
	      <div class="header">
	        <div class="navbar-header">
              <nav class="navbar navbar-inverse" role="navigation">
                <div class="container">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">Smartkin</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Men&uacute;</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    
                  </div>
                
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                          <li><a href="./index.php">Home</a></li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categor&iacute;as <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              {foreach $categorias as $nombre}
                                  <li>
                                      <a onClick = "getDataColecciones({$nombre.id_categoria});">{$nombre.nombre_categoria}</a>
                                  </li>
                              {/foreach}
                            </ul>
                          </li>
                          <li><a href="contacto.html">Contacto</a></li>
                      </ul>
                  </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <a onClick = "getContacto();" id="id_contacto">Contacto</a>