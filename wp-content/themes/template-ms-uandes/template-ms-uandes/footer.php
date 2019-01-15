<footer class="site-footer">
	<div class="container">
		<div class="footer-contact-title">
			
			<h2 class="chevron-title inverted-bg">Contáctanos</h2>
			
			<div class="redes-container">
				<ul class="redes">
					<li><a target="_blank" class="redes-icon icon-facebook" href="<?php// echo get_field('url_facebook','option'); ?>"><span>Facebook</span></a></li>
					<li><a target="_blank" class="redes-icon icon-instagram" href="<?php// echo get_field('url_instagram','option'); ?>"><span>Instagram</span></a></li>
					<li><a target="_blank" class="redes-icon icon-youtube" href="<?php// echo get_field('url_youtube','option'); ?>"><span>YouTube</span></a></li>
					<li><a target="_blank" class="redes-icon icon-twitter" href="<?php// echo get_field('url_twitter','option'); ?>"><span>Twitter</span></a></li>
					<li><a target="_blank" class="redes-icon icon-linkedin" href="<?php// echo get_field('url_linkedin','option'); ?>"><span>LinkedIn</span></a></li>
				</ul>
			</div>
			
		</div>
		<div class="footer-contact-container">
			<div class="footer-contact-options">
				<ul class="contact-options-list">
					<li class="contact-icon-email"><a href="mailto:contacto@uandes.cl">contacto@uandes.cl</a></li>
					<li class="contact-icon-phone"><a href="tel:56226181000">(56&nbsp;2)&nbsp;2&nbsp;618&nbsp;10&nbsp;00</a></li>
					<li class="contact-icon-location">Monseñor Álvaro del Portillo 12455<br>
					Las Condes, Santiago, Chile</li>
				</ul>
				<a href="https://www.google.cl/maps/place/Universidad+de+los+Andes/@-33.4042964,-70.5085969,17z/data=!3m1!4b1!4m5!3m4!1s0x9662cc3e7884186d:0x1437ffc0a9aa8193!8m2!3d-33.4043009!4d-70.5064082">Ver mapa</a>
				
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
</body>
</html>