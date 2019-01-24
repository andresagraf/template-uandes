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
 Template Name: Contacto
*/

get_header();
?>

<section class="page-main titulo-contac">
	<div class="container">
			<h1><?php echo get_the_title(); ?></h1>
	</div>
<section class="cont-contact-gral">		
		<div class="container">
			<h2>Información de contacto general</h2>
			aaaaaaaaaaaaaaaaaaaaaaa
			
		</div>
	</div>
</section>
<section class="otros-medios">		
		<div class="container">
					<h3>Otros medios</h3>
			<div class="social">
			
				<?php
				$facebook_link = get_field('facebook_link');
				$twitter_link = get_field('twitter_link');
				$youtube_link = get_field('youtube_link');
				$instagram_link = get_field('instagram_link');
				$pinterest_link = get_field('pinterest_link');

				$facebook_visible =  get_field('facebook_visible');
				$twitter_visible =  get_field('twitter_visible');
				$youtube_visible = get_field('youtube_visible');
				$instagram_visible = get_field('instagram_visible');
				$pinterest_visible2 = get_field('pin_xxx');
				 
				
				if($facebook_visible && in_array('1', $facebook_visible) ){
				?>
					<a href="<?php echo $facebook_link ?>" target="_blank">
						<span class="fa fa-facebook"></span>
					</a>
				<?php
				}
				if($twitter_visible && in_array('1', $twitter_visible) ){
				?>
					<a href="<?php echo $twitter_link ?>" target="_blank">
						<span class="fa fa-twitter"></span>
					</a>
				<?php
				}
				if($youtube_visible && in_array('1', $youtube_visible) ){
				?>
					<a href="<?php echo $youtube_link ?>" target="_blank">
						<span class="fa fa-youtube"></span>
					</a>
				<?php
				}
				if($instagram_visible && in_array('1', $instagram_visible) ){
				?>
					<a href="<?php echo $instagram_link ?>" target="_blank">
						<span class="fa fa-instagram"></span>
					</a>
				<?php
				}
				if($pinterest_visible2 && in_array('1', $pinterest_visible2) ){
				?>
					<a href="<?php echo $pinterest_link ?>" target="_blank">
						<span class="fa fa-pinterest"></span>
					</a>
				<?php
				}
				?> 
				
			</div>
			
		</div>
	</div>
</section>
<?php include("inc/acceso-directo.php"); ?>
<?php
//get_sidebar();
get_footer();
