<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title( ' | ', true, 'right' ); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();; ?>/css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>

  <body>
    <div class="container">
      <div class="row">
	<div class="col-md-10 col-md-offset-1">
          <!-- Navigation -->
          <div class="row">
            <nav class="navbar" role="navigation">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
		<h1><a href="#">Tapie Castañeda Firma de Abogados</a></h1>
		<select class="navbar-toggle col-xs-11 navigation-select" onchange="redirectPage(this)">
		  <option value="1">La Firma</option>
		  <option value="2">Servicios</option>
		  <option value="3">|-- Servicio 1</option>
		  <option value="4">|-- Servicio 2</option>
		  <option value="5">|-- La FirmaServicio con un texto muy largo que abarca mucho espacio</option>
		  <option>Contacto</option>
		</select>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
                  <li class="active">
                    <a href="#">La Firma</a>
                  </li>
		  <li>
		    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
		      Servicios
		    </a>
		    <ul class="dropdown-menu">
		      <li class="triangle"></li>
		      <li><a tabindex="-1" href="#">Servicio 1</a></li>
		      <li><a tabindex="-1" href="#">Servicio 2</a></li>
		      <li><a tabindex="-1" href="#">Servicio con un texto muy largo que abarca mucho espacio</a></li>
		    </ul>
		  </li>
                  <li>
                    <a href="#">Online</a>
                  </li>
		</ul>
              </div>
              <!-- /.navbar-collapse -->
            </nav>
          </div>