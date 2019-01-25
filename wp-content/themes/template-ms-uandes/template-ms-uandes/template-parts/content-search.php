<article class="item-busqueda">
	<a href="<?php echo get_the_permalink(); ?>"><h1><?php echo get_the_title(); ?></h1></a>
	<?php echo the_excerpt(); ?>
	<span class="busqueda-post-type"><?php
		switch( get_post_type( get_the_id() ) ){
			case 'post' :
				echo 'Noticias';
				break;
			case 'page' :
				echo 'Página';
				break;
			case 'publicacion' :
				echo 'Publicación';
				break;
			case 'prensa' :
				echo 'Mención en la prensa';
				break;
		}
		?>
</article>
