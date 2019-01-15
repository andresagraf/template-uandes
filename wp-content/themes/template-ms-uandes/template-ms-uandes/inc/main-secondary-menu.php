<?php
	$tipo_de_menu_secundario = get_field('tipo_de_menu_secundario');
        $ancestors = array_reverse(get_ancestors( $post->ID, 'page' ));
        $ancestors[0] ? $top_term_id = $ancestors[0] : "";

        if($post->post_parent):

            $cantidad_paginas = count(get_children($post->ID));

            if ($cantidad_paginas>0):
                $children = wp_list_pages('sort_column=menu_order&title_li=&child_of='.$post->ID.'&echo=0&depth=1');
                $title_id = $post->ID;
            else:
                $children = wp_list_pages('sort_column=menu_order&title_li=&child_of='.$post->post_parent.'&echo=0&depth=1');
                $title_id = $post->post_parent;
            endif;

        else:
            $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=1');
            $title_id = $post->ID;
        endif;

switch($tipo_de_menu_secundario){
	case 'manual' : ?>
		<nav class="sticky-menu">
			<div class="container">
					<a class="submenu-heading" href="<?php echo get_page_link( $top_term_id ); ?>"><?php echo get_the_title($top_term_id); ?></a>
					<?php
						$menu = get_field('menu');
						wp_nav_menu([
						'menu' => $menu,
						'menu_class' => 'secondary-menu-items',
						'container' => false
						] ); ?>
					<a class="secondary-menu-toggle"><span>Menú secundario</span></a>
			</div>
		</nav>	
	<?php break;
	case 'ninguno' : ?>
	
	<?php break;
	default : ?>
		<nav class="sticky-menu">
		    <div class="container">
		        <a class="submenu-heading" href="<?php echo get_page_link( $top_term_id ); ?>">
		            <?php echo get_the_title($title_id); ?>
		        </a>
		        <?php if ($children): ?>
		            <ul class="secondary-menu-items">
		                <?php echo $children; ?>
		            </ul>
		        <?php endif; ?>
		        <a class="secondary-menu-toggle"><span>Menú secundario</span></a>
		    </div>
		</nav>
	<?php break;
} ?>
