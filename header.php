<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="description" content="">
    	<meta name="author" content="">
    	<link rel="icon" href="../../favicon.ico">
		<title><?php bloginfo('name'); ?></title>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<!-- navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a>
        </div>
			<?php 

				$args = array(
					'theme_location' => 'primary',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'container_class'    => 'collapse navbar-collapse',
					'menu_class'=> 'nav navbar-nav',
					'depth' => 2,
					//Process nav menu using our custom nav walker
  					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                	'walker'            => new wp_bootstrap_navwalker()
				);

				wp_nav_menu($args);

			?>
      </div>
    </nav>


	<!-- /navigation -->

	<div class="container">
	<main class="main-content">

	<!-- ... MAIN CONTENT -->

