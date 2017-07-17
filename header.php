<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Psallite: Medieval Music for Everyone</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=UnifrakturMaguntia" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/page.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
 <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
	  </button><div style="margin-top:3px">
	<img height="40px" src="<?php echo get_bloginfo('template_directory');?>/psallite_logo_dark.svg"> <a style="font-family:UnifrakturMaguntia;font-size:xx-large;vertical-align:middle" href="<?php echo get_home_url(); ?>">Psallite</a></div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
	          <?php wp_nav_menu( array( 
            'theme_location' => 'primary', 
            'menu_class' => 'nav navbar-nav navbar-right',  
            'walker' => new wp_bootstrap_navwalker()) 
            ); 
            ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

