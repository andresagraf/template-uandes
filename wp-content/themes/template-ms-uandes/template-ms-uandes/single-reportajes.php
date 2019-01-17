<?php
get_header();
?>
<div>
<?php// include('inc/noticias-secondary-menu.php'); ?>
<section class="news-body">

	<div class="container">
	<div class="breadcrumb"><?php the_breadcrumb(); ?></div>
		<div class="news-container">

			<?php while ( have_posts() ) : the_post();?>
			<p class="news-date"><?php echo the_date(); ?></p>
			<h1 class="news-title"><?php echo get_the_title(); ?></h1>
			<?php if(has_excerpt()) : ?><p class="news-excerpt"><?php echo get_the_excerpt(); ?></p><?php endif; ?>
			<p class="post-meta">Escrito por <?php echo get_the_author(); ?><br>
			
			</p>
		
			<div class="ua-16x9-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<?php if(get_the_post_thumbnail_caption() != '') : ?>
			<div class="news-photo-caption"><?php echo the_post_thumbnail_caption(); ?></div>
			<?php endif; ?>
						
			<div class="news-content">
				<?php the_content(); ?>
			</div>	
			<hr>
			<div class="centered">
				<ul class="news-tags">
					<?php   = wp_get_post_tags($post->ID);?>
					<?php foreach($tags as $tag) : ?>
						<li><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>

<?php endwhile; ?>

</section>
<section class="related-news alt-background">
	<div class="container">
		<h2 class="centered">Reportajes relacionados</h2>
		<div class="related-news-items">
<?php
//para poner en el loop, muestra 5 titulos de post relacionados con la primera tag del post actual
$tags = wp_get_post_tags($post->ID);
if ($tags) {
  $first_tag = $tags[0]->term_id;
  $args=array(
    'tag__in' => array($first_tag),
    'post__not_in' => array($post->ID),
    'showposts'=>4,
    'caller_get_posts'=>1
   );
  $my_query = new WP_Query($args);
  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
     			<a href="<?php echo get_the_permalink( $noticia->ID ); ?>" class="news-item-block">
				<div class="ua-16x9-thumbnail">
					<?php echo get_the_post_thumbnail( $noticia->ID); ?>
				</div>
				<div class="news-item-text">
					<span class="block-list-item-category">
					<?php $tags = wp_get_post_tags($post->ID);?>
					<?php foreach($tags as $tag) : ?>
						<?php echo $tag->name." "; ?>
					<?php endforeach; ?>
					</span>
					<h3><?php the_title(); ?></h3>
					<span class="block-list-item-post-date"><?php echo get_the_date(); ?></span>
				</div>
			</a>
      <?php
    endwhile;
  }
}
?>
		</div>
		<div class="container centered">
			<a class="btn-cta-simple" href="<?php echo get_permalink( get_option('page_for_posts')); ?>">Ver todas las noticias</a>
		</div>
	</div>
</section>
</div>
<?php include('inc/front-page/newsletter.php'); ?>

<?php
get_footer();
