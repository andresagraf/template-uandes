<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package UANDES
 */

get_header();
?>

<div>
<section class="all-news">
	<div class="container">
	<div class="breadcrumb"><?php the_breadcrumb(); ?></div>		
		<div class="news-archive-container">
<?php
		
			while ( have_posts() ) : the_post(); ?>
		
			<div class="news-item <?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?>">
				<div class="news-item-image">
					<div class="ua-16x9-thumbnail"><?php the_post_thumbnail('large'); ?></div>
				</div>
				<div class="inner">				
					<span class="block-list-item-category">
					<?php $tags = wp_get_post_tags($post->ID);?>
					<?php foreach($tags as $tag) : ?>
						<?php echo $tag->name." "; ?>
					<?php endforeach; ?>
					</span>
					<a class="news-link" href="<?php the_permalink(); ?>"><h3 class="block-list-item-title"> <?php the_title(); ?></h3></a>
						<?php the_excerpt(); ?>
					<span class="block-list-item-post-date"><?php echo get_the_date(); ?></span>
				</div>
			</div>
			<?php $count++; ?>
		<?php endwhile; ?>
		</div>
		
		<div class="container centered">
		<?php the_posts_pagination(array(
			'mid_size' => 2,
			'prev_text' => '<',
			'next_text' => '>',
			)); ?>
		</div>
	</div>
</section>

</div>

<?php
get_footer();
