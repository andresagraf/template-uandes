<?php include('inc/front-page/newsletter.php'); ?>
<footer class="site-footer">
	<div class="container">
		<div class="footer-contact-title">
			
			<h2 class="chevron-title inverted-bg">Contáctanos</h2>
			
			<ul class="redes">
				<?php
				$facebook_link = get_field('facebook_link_footer','option');
				$twitter_link = get_field('twitter_link_footer','option');
				$youtube_link = get_field('youtube_link_footer','option');
				$instagram_link = get_field('instagram_link_footer','option');
				$linkedin_link = get_field('linkedin_link_footer','option');				

				$facebook_visible =  get_field('facebook_visible_footer','option');
				$twitter_visible =  get_field('twitter_visible_footer','option');
				$youtube_visible = get_field('youtube_visible_footer','option');
				$instagram_visible = get_field('instagram_visible_footer','option');
				$linkedin_visible2 = get_field('linkedin_visible_footer','option');				
				 
				
				if($facebook_visible && in_array('1', $facebook_visible) ){
				?>
					<li><a target="_blank" class="redes-icon icon-facebook" href="<?php echo $facebook_link; ?>"><span>Facebook</span></a></li>
				<?php
				}
				if($instagram_visible && in_array('1', $instagram_visible) ){
				?>
					<li><a target="_blank" class="redes-icon icon-instagram" href="<?php echo $instagram_link; ?>"><span>Instagram</span></a></li>
				<?php
				}
				
				if($youtube_visible && in_array('1', $youtube_visible) ){
				?>
					<li><a target="_blank" class="redes-icon icon-youtube" href="<?php echo $youtube_link; ?>"><span>YouTube</span></a></li>
				<?php
				}
				if($twitter_visible && in_array('1', $twitter_visible) ){
				?>
					<li><a target="_blank" class="redes-icon icon-twitter" href="<?php echo $twitter_link; ?>"><span>Twitter</span></a></li>
				<?php
				}
				if($linkedin_visible2 && in_array('1', $linkedin_visible2) ){
				?>
					<li><a target="_blank" class="redes-icon icon-linkedin" href="<?php echo $linkedin_link; ?>"><span>LinkedIn</span></a></li>
				<?php
				}
				?> 			
			
			</ul>
			
		</div>
		<div class="footer-contact-container">
			<div class="footer-contact-options">
				<ul class="contact-options-list">
					<li class="contact-icon-email"><a href="mailto:<?php the_field('contacto_footer','option'); ;?>"><?php the_field('contacto_footer','option'); ;?></a></li>
					<li class="contact-icon-phone"><a href="tel:<?php the_field('numero_telefonico','option'); ;?>"><?php the_field('numero_telefonico','option'); ;?></a></li>
					<li class="contact-icon-location"><?php the_field('direccion_footer','option'); ;?><br>
					<?php the_field('comuna_pais_footer','option'); ;?></li>
				</ul>
				<a href="https://www.google.cl/maps/place/Universidad+de+los+Andes/@<?php the_field('latitud_footer','option'); ;?>,<?php the_field('longitud_footer','option'); ;?>,17z/data=!3m1!4b1!4m5!3m4!1s0x9662cc3e7884186d:0x1437ffc0a9aa8193!8m2!3d-33.4043009!4d-70.5064082" target="_blank">Ver mapa</a>
				
			</div>
			
			<div class="footer-contact-shortcuts">
						<?php
				
			wp_nav_menu( [
				'menu' => 'Footer Links 1',
				'menu_class' => 'contact-options-list',
				'container' => false
				] );
				?>
			</div>
			
			<?php
				
			wp_nav_menu( [
				'menu' => 'Footer Links 2',
				'menu_class' => 'footer-nav footer-links-1',
				'container' => false
				] );
			
			wp_nav_menu( [
				'menu' => 'Footer Links 3',
				'menu_class' => 'footer-nav footer-links-2',
				'container' => false
				] );

			?>
			
		</div>
	</div>
</footer>
<footer class="site-colophon">
	<div class="container">
		<div class="logo-acreditacion">
			<img src="<?php echo get_template_directory_uri(); ?>/img/elements/logo-acreditacion.svg">
		</div>
		<div>
			<img src="<?php echo get_template_directory_uri(); ?>/img/elements/txt-ir-por-mas.png">
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function($){
                $('.slider').slick({
                    dots: true,
                    adaptiveHeight: true,
                })
            });
</script>
</body>
</html>