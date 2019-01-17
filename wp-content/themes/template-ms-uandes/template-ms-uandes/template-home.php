<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Template-ms-uandes
 */
 /*
 Template Name: Homepage
*/

get_header();
?>
<section class="slider-home">
			<?php 
				
				$features_args = array(
					'posts_per_page' => 5,
					'post_type' => 'reportajes',
					'orderby' => 'post__in'
				);
				
				$features_query = new WP_Query($features_args);
			while($features_query->have_posts()) : $features_query->the_post(); ?>
			<div>
			<?php the_post_thumbnail(); ?>
			<?php echo get_the_title(); ?>
			</div>
			<?php endwhile;
				
				wp_reset_postdata(); 
			?>

	
</section>

<section class="page-main">
	<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
	</div>
</section>	
<?php
//get_sidebar();
get_footer();
