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
	$muestravideo = get_field('selector_slider_o_video') == 'video';
	$source_video = get_field('video_wall');
	$slider_home = get_field('slider_home');

	if( $muestravideo ) {
		echo '<video class="video_wallsource" preload="auto" autoplay loop><source src="';
		echo $source_video;
		echo '" type="video/mp4"></video>';
	} 
	else if($slider_home) {
		echo '<ul>';
			foreach($slider_home as $row)
				{
					$image = $row['imagen_desktop'];
					$image_mobile = $row['imagen_mobile'];		
					$link = $row['link_slider'];
					
					echo '<li class="slide">';
					if( $link ):
					echo '<a href="';
					echo $link;
					echo '">';
					endif;
					
					echo '<img src="';
					echo  $image;
					echo '" alt="';
					echo $titulo_slider;
					echo '"';
					echo 'class="slider-desktop"';
					echo '/>';
					
					echo '<img src="';
					echo  $image_mobile;
					echo '" alt="';
					echo $titulo_slider;
					echo '"';
					echo 'class="slider-mobile"';
					echo '/>';
					
					if( $link ):
					echo '</a>';
					endif;
					echo '</li>';								
			}

		echo '</ul>';
	}
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
