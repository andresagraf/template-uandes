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
</section>	
<section class="cont-contact-gral">		
		<div class="container">
			<h2>Información de contacto general</h2>
			<div class="contacto-list">
				<?php
				$telefono = get_field('telefono_contacto');
				if('' != $telefono) : ?>		
				<div class="caja-contacto">
				<div class="icon-contact circulo_contac">
						<i class="fa fa-phone"></i>
				</div>
				<h3>Teléfono</h3>
				<?php echo $telefono; ?>				
				</div>
				<?php endif; ?>	
				<?php
					$correos = get_field('correo_contacto');
						if('' != $correos) : ?>					
				<div class="caja-contacto">
				<div class="icon-contact">
					<i class="fa fa-envelope"></i>
				</div>				
				<h3>Correo Electrónico</h3>
						<?php foreach($correos as $correo) : ?>
							<a href="mailto:<?php echo $correo['mail_contacto']; ?>" title=""><span><?php echo $correo['mail_contacto']; ?></span></a> /
					<?php endforeach;?>	
				</div>
				<?php endif; ?>
				<?php
				$direccion = get_field('direccion_contacto');
				if('' != $direccion) : ?>											
				<div class="caja-contacto">
				<div class="icon-contact">
					<i class="fa fa-map-marker"></i>
				</div>				
				<h3>Dirección</h3>
					<?php echo $direccion; ?>	
				</div>								
				<?php endif; ?>	
			</div>
					<?php
		while ( have_posts() ) :
			the_post();

			the_content();

		endwhile; // End of the loop.
		?>	
		</div>
	</div>
	
</section>
<section class="otros-medios">		
		<div class="container">
					<h3>Otros medios</h3>
			<div class="contacto-list">
			
				<?php
				$facebook_link = get_field('facebook_link');
				$twitter_link = get_field('twitter_link');
				$youtube_link = get_field('youtube_link');
				$instagram_link = get_field('instagram_link');
				$pinterest_link = get_field('pinterest_link');
				$linkedin_link = get_field('linkedin_link');
								
				$facebook_texto = get_field('facebook_texto');
				$twitter_texto = get_field('twitter_texto');
				$youtube_texto = get_field('youtube_texto_1');
				$instagram_texto = get_field('instagram_texto_1');
				$pinterest_texto = get_field('pinterest_texto');
				$linkedin_texto = get_field('linkedin_texto');
				
				$facebook_visible =  get_field('facebook_visible');
				$twitter_visible =  get_field('twitter_visible');
				$youtube_visible = get_field('youtube_visible');
				$instagram_visible = get_field('instagram_visible');
				$pinterest_visible2 = get_field('pin_xxx');
				$linkedin_visible2 = get_field('linkedin_visible');				
				
				
				if($facebook_visible && in_array('1', $facebook_visible) ){
				?>
				<a href="<?php echo $facebook_link ; ?>" class="caja-contacto gris" target="_blank">
					<div class="icon-contact circulo_contac">
							<i class="fa fa-facebook"></i>
					</div>
					<h3>Facebook</h3>
					<p><?php echo $facebook_texto; ?></p>
				</a>
				<?php
				}
				if($twitter_visible && in_array('1', $twitter_visible) ){
				?>
				<a href="<?php echo $twitter_link; ?>" class="caja-contacto  gris" target="_blank">
					<div class="icon-contact circulo_contac">
							<i class="fa fa-twitter"></i>
					</div>
					<h3>Twitter</h3>
					<p><?php echo $twitter_texto; ?></p>
				</a>				
				<?php
				}
				if($youtube_visible && in_array('1', $youtube_visible) ){
				?>
				<a href="<?php echo $youtube_link; ?>" class="caja-contacto  gris" target="_blank">
					<div class="icon-contact circulo_contac">
							<i class="fa fa-youtube"></i>
					</div>
					<h3>Youtube</h3>
					<p><?php echo $youtube_texto; ?></p>
				</a>				
				<?php
				}
				if($instagram_visible && in_array('1', $instagram_visible) ){
				?>
				<a href="<?php echo $instagram_link; ?>" class="caja-contacto  gris" target="_blank">
					<div class="icon-contact circulo_contac">
							<i class="fa fa-instagram"></i>
					</div>
					<h3>Instagram</h3>
					<p><?php echo $instagram_texto; ?></p>
				</a>				
				<?php
				}
				if($pinterest_visible2 && in_array('1', $pinterest_visible2) ){
				?>
				<a href="<?php echo $pinterest_link; ?>" class="caja-contacto  gris" target="_blank">
					<div class="icon-contact circulo_contac">
							<i class="fa fa-pinterest"></i>
					</div>
					<h3>Pinterest</h3>
					<p><?php echo $pinterest_texto; ?></p>
				</a>				
				<?php
				}
				if($linkedin_visible2 && in_array('1', $linkedin_visible2) ){
				?>
				<a href="<?php echo $linkedin_link; ?>" class="caja-contacto  gris" target="_blank">
					<div class="icon-contact circulo_contac">
							<i class="fa fa-linkedin-square"></i>
					</div>
					<h3>Linkedin</h3>
					<p><?php echo $linkedin_texto; ?></p>
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
