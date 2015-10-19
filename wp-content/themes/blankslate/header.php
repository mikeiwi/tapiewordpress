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
    <?php wp_head(); ?>
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
		<h1><a href="<?php echo get_site_url(); ?>">Tapie Castañeda Firma de Abogados</a></h1>
		<select class="navbar-toggle col-xs-11 navigation-select" onchange="redirectPage(this)">
		  <?php $pages = get_pages( array( 'sort_column' => 'menu_order', 'parent' => 0, 'exclude' => 2 ) ); ?>
		  <?php foreach ( $pages as $page ): ?>
		  <option value="<?php echo get_page_link( $page->ID ); ?>" <?php if (is_page($page->ID)) echo 'selected="selected"'; ?>><?php echo $page->post_title; ?></option>
                  <?php $children = get_pages('child_of='.$page->ID.'&sort_column=menu_order'); ?>
		  <?php foreach ( $children as $child ): ?>
                  <option value="<?php echo get_page_link( $child->ID ); ?>" <?php if (is_page($child->ID)) echo 'selected="selected"'; ?>>|-- <?php echo $child->post_title; ?></option>
		  <?php endforeach; ?>
		  <?php endforeach; ?>
		</select>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
          <?php $pages = get_pages( array( 'sort_column' => 'menu_order', 'parent' => 0 ) ); ?>
          <?php foreach ( $pages as $page ): ?>
	  <li class="<?php if (is_page($page->ID)) echo 'active'; ?>">
	    <?php $children = get_pages('child_of='.$page->ID.'&sort_column=menu_order'); ?>
            <a href="<?php echo get_page_link( $page->ID ); ?>" <?php if( count( $children ) != 0 ){ ?>class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false"<?php } ?>><?php echo $page->post_title; ?></a>
	    <?php if( count( $children ) != 0 ): ?>
	    <ul class="dropdown-menu">
	      <li class="triangle"></li>
	    <?php foreach ( $children as $child ): ?>
	      <li class="<?php if (is_page($child->ID)) echo 'active'; ?>"><a tabindex="-1" href="<?php echo get_page_link( $child->ID ); ?>"><?php echo $child->post_title; ?></a></li>
	    <?php endforeach; ?>
	    </ul>
	    <?php endif; ?>
          </li>
	  <?php endforeach; ?>
		</ul>
              </div>
              <!-- /.navbar-collapse -->
            </nav>
          </div>
