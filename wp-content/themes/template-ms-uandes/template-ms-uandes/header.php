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
		<?php wp_nav_menu( ['menu' => 'Principal'] ); ?>
		<!--<ul>
			<li><a href="/la-uandes/">La UANDES</a></li>
			<li><a href="http://admision.uandes.cl/">Admisión</a></li>
			<li><a href="/carreras/">Carreras</a></li>
			<li><a href="http://postgradosuandes.cl/">Postgrados</a></li>
			<li><a href="#">Extensión</a></li>
			<li><a href="/noticias/">Noticias</a></li>
			<li><a href="/eventos/">Eventos</a></li>
			<li class="menu-secondary-item"><a href="#">Investigación</a></li>
			<li class="menu-secondary-item"><a href="#">Innovación</a></li>
			<li class="menu-secondary-item"><a href="#">Internacional</a></li>
			<li class="menu-secondary-item"><a href="#">Biblioteca</a></li>
			<li class="menu-secondary-item"><a href="#">EN</a></li>
		</ul>-->
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
			<!--<ul class="middle-menu-list">
				<li><a href="/la-uandes/">La UANDES</a></li>
				<li><a href="http://admision.uandes.cl/">Admisión</a></li>
				<li class="megamenu-toggle"><a href="/carreras/">Carreras</a>
				</li>
				<li><a href="http://postgradosuandes.cl/">Postgrados y Educación Contínua</a></li>
				<li><a href="#">Extensión</a></li>
				<li><a href="/noticias/">Noticias</a></li>
				<li><a href="/eventos/">Eventos</a></li>
			</ul>-->
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
				<ul>
					<li><a href="http://admision.uandes.cl/">Admisión</a></li>
					<li><a href="/carreras/">Carreras</a></li>
					<li><a href="http://postgradosuandes.cl/">Postgrados</a></li>
					<li><a href="http://postgradosuandes.cl/">Educación Contínua</a></li>
					<li><a href="#">Extensión</a></li>
					<li><a href="#">Vive UANDES</a></li>
					<li><a href="#">Sala de Prensa</a></li>
					<li><a href="#">La Universidad</a></li>
					<li><a href="#">Biblioteca</a></li>
					<li><a href="#">Investigación</a></li>
					<li><a href="http://innovacion.uandes.cl/">Innovación</a></li>
					<li><a href="#">Internacional</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
