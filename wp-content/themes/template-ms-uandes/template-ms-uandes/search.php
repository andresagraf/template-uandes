<?php
get_header();
?>
<div class="container">

		<?php if ( have_posts() ) : ?>
<br>

				<h1 class="page-title">Resultados de búsqueda para <em><?php echo get_search_query(); ?></em></h1>

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
<?php
get_footer();
