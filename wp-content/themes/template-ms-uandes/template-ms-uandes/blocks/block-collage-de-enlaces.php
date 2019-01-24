<div class="collage-texto">
	<h2><?php the_field('titulo_collage'); ?></h2>
	<h3><?php the_field('texto_destacado_collage'); ?></h3>
	<p><?php the_field('texto_collage'); ?></p>
</div>
<div class="collage-de-enlaces">

	<a class="link-1 <?php $accesos1 = get_field('imagen_1'); if('' != $accesos1) : ?> sin-icono <?php endif; ?>" <?php $fondo_1 = get_field('imagen_1'); if('' != $fondo_1) : ?>style="background-image:url(<?php echo $fondo_1; ?>);" <?php endif; ?> href="<?php the_field('link_1'); ?>" ><span><?php the_field('texto_1'); ?></span></a>
	<a class="link-2 <?php $accesos2 = get_field('imagen_2'); if('' != $accesos2) : ?> sin-icono <?php endif; ?>"  <?php $fondo_2 = get_field('imagen_2'); if('' != $fondo_2) : ?>style=" background-image:url();" <?php endif; ?> href="<?php the_field('link_2'); ?>" ><span><?php the_field('texto_2'); ?></span></a>
	<a class="link-3 <?php $accesos3 = get_field('imagen_3'); if('' != $accesos3) : ?> sin-icono <?php endif; ?>" <?php $fondo_3 = get_field('imagen_3'); if('' != $fondo_3) : ?>style=" background-image:url();" <?php endif; ?> href="<?php the_field('link_3'); ?>" ><span><?php the_field('texto_3'); ?></span></a>
	<a class="link-4 <?php $accesos4 = get_field('imagen_4'); if('' != $accesos4) : ?> sin-icono <?php endif; ?>" <?php $fondo_4 = get_field('imagen_4'); if('' != $fondo_4) : ?>style=" background-image:url();" <?php endif; ?> href="<?php the_field('link_4'); ?>" ><span><?php the_field('texto_4'); ?></span></a>
	<a class="link-5 <?php $accesos5 = get_field('imagen_5'); if('' != $accesos5) : ?> sin-icono <?php endif; ?>" <?php $fondo_5 = get_field('imagen_5'); if('' != $fondo_5) : ?>style=" background-image:url();" <?php endif; ?> href="<?php the_field('link_5'); ?>" ><span><?php the_field('texto_5'); ?></span></a>
</div>





