<div class="home-grid">
<?php
	$bloqhomes = get_field('texto_home');

if('' != $bloqhomes) : 
		$c = 1;
	foreach($bloqhomes as $bloqhome) : 

	if($c % 2){
	
	?>
<div class="home-gridrow izquierda">
 <div class="imagen-home order-1" style="background-image: url(<?php echo $bloqhome['imagen_home']; ?>)"></div>
  <div class="txt-home order-1">
	<div class="marg-inter">
	<?php echo $bloqhome['texto_home2']; ?>
	</div>
	</div>
</div>
			<?php }else{
		?>
<div class="home-gridrow derecha">
<div class="imagen-home order-2" style="background-image: url(<?php echo $bloqhome['imagen_home']; ?>)"></div>
	<div class="txt-home order-2">
	<div class="marg-inter">
	<?php echo $bloqhome['texto_home2']; ?>
	</div>
</div>
</div>	
<?php  
	} $c++; endforeach; ?>
<?php endif; ?>	
</div>
