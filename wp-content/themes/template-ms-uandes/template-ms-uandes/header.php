<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav class="popup-menu">
		<a class="popup-menu-close" href="#">&#x2716</a>
		
	<ul id="MyMenu">
	  <?php wp_nav_menu( array('menu' => 'Principal', 'items_wrap' => '%3$s', 'container' => false ) ); ?>
	  <?php wp_nav_menu( array('menu' => 'Cenefa', 'items_wrap' => '%3$s', 'container' => false ) ); ?>
	</ul>	
	</nav>

<header class="main-menu">
	<nav class="top-menu">
		<div class="container">
			<?php wp_nav_menu( ['menu' => 'Cenefa'] ); ?>
		</div>
	</nav>
	<nav class="middle-menu">
		<div class="container">
			<a href="/" class="main-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/elements/logo-uandes-3.svg" alt="Universidad de Los Andes"></a>
			
			<?php 
				$args = array(
					'menu_class' => 'middle-menu-list',        
					'menu' => 'Principal');
				wp_nav_menu( $args ); 
				?>
				</div>
	</nav>
	<a href="#" class="main-menu-toggle"><span>Menú</span></a>	
	
	<div class="search-panel">
		<a class="close-search" href="#"><span>&times;</span></a>
		<div class="container">
			<form class="search-form">
				<input name="s" class="search-box" type="text" placeholder="Escribe aquí lo que estás buscando"><input type="submit" class="search-submit" value="">
			</form>
			<div class="search-suggestions">
				<h3>Lo más buscado</h3>
				<?php 
					$args = array(       
						'menu' => 'Lo más buscado');
					wp_nav_menu( $args ); 
					?>
			</div>
		</div>
	</div>
</header>
