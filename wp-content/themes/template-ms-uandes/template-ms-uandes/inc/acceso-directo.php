<?php
	$shortcuts = get_field('accesos_directos');

if('' != $shortcuts) : ?>

<section class="shortcuts">
	<div class="container">
		<h2 class="centered shortcuts-header">Más de<strong> accesos directos</strong></h2>
		<div class="shortcuts-list">
			
			<?php foreach($shortcuts as $shortcut) : ?>
			<a href="<?php echo $shortcut['enlace']['url']; ?>" title="<?php echo $shortcut['titulo']; ?>"><span><?php echo $shortcut['titulo']; ?></span></a>
			<?php endforeach;?>
		</div>
	</div>
</section>

<?php endif; ?>	
