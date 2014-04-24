<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' /> 
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div class="container">


			<header id="header" role="banner" class="row">
				<section id="branding">
					<h1>
						<div class= "topHeader" a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">DOG <br/>
						BREED <br />
						PLETHORA
						</a>
						</div>
					</h1>
					<form method="get" class="col-md-4" id="searchform" action="<?php bloginfo('home'); ?>/">
					<input class="searchBar" stype="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" class="btn" />
					
					</form>
			
					<h2><?php bloginfo( 'description' ); ?></h2>
				</section>
				


				<!-- NAVIGATION! -->
					<nav class="navbar navbar-default" role="navigation">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    
					    </div>

					        <?php
					            wp_nav_menu( array(
					                'menu'              => 'menu-1',
					                'theme_location'    => 'primary',
					                'depth'             => 2,
					                'container'         => 'div',
					                'container_class'   => 'collapse navbar-collapse',
					        		'container_id'      => 'bs-example-navbar-collapse-1',
					                'menu_class'        => 'nav navbar-nav',
					                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'walker'            => new wp_bootstrap_navwalker())
					            );
					        ?>
					    </div>
					</nav>

			</header>


	<div id="container">
