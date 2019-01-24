<?php
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="breadcrumb"><?php the_breadcrumb(); ?></div>	
	<div class="entry-content">
		<?php
		the_content();


		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
