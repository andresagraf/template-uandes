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
 Template Name: Dos columnas
*/

get_header();
?>
	<nav class="sticky-menu">
		<div class="container">
		<a class="submenu-heading" href="<?php echo esc_url(); ?>">
			
			<?php echo get_the_title(); ?></a>
		</div>
	</nav>

<section class="page-main">

	<div class="container dual-column-grid">
<div id="sidebar" role="complementary" class="sidebarclass">
  <?php if (!dynamic_sidebar('sidebar-izquierdo')); ?>
</div>	
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
	</div>
</section>
<?php include("inc/acceso-directo.php"); ?>
<?php
//get_sidebar();
get_footer();
