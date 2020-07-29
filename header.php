<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div class="main">
	<div id="home" class="main_home"></div>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light">
			<?php
			   if(has_custom_logo()){
				  the_custom_logo();
			?>
			<?php
			   } else{
				 echo bloginfo('description');
			?>
			<?php } ?>

		  <!-- <img class="logo" src="<?php bloginfo('template_url') ?>/assets/images/logo.png" alt="logo" width="100px"> -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
		  <?php

				if( has_nav_menu('topo') ){
		            wp_nav_menu([
		              'theme_location' => 'topo',
		              'fallback_cb' => false,
		              'container_id' => 'navbarResponsive',
		              'menu_class' => 'navbar-nav ml-auto',
		              'walker' => new WP_Bootstrap_Navwalker(),
		              'depth' => 3
		            ]);
		        }

			?>
			</div>

	</nav><!-- end nav menu -->