jQuery('.main-menu-toggle').click(function(event){
	event.preventDefault();
	jQuery('.popup-menu').addClass('active');
});

jQuery('.popup-menu-close').click(function(event){
	event.preventDefault();
	jQuery('.popup-menu').removeClass('active');
});


jQuery('.open-search').click(function(event){
	event.preventDefault();
	jQuery('.search-panel').addClass('active');
});

jQuery('.close-search').click(function(event){
	event.preventDefault();
	jQuery('.search-panel').removeClass('active');
});

jQuery('.secondary-menu-toggle').click(function(event){
	event.preventDefault();
	jQuery(this).toggleClass('active');
	jQuery('.secondary-menu-items').toggleClass('active');
});

// Switch Publicaciones

if(jQuery('.publicaciones-lista-anios').length){
	jQuery('.publicaciones-lista-anios li').first().addClass('active');
	jQuery('.publicaciones-anio').first().addClass('active');
	
	jQuery('.toggle-year').click(function(event){
		event.preventDefault();
		var selectedYear = jQuery(this).data('year');
		console.log(selectedYear);
		jQuery('.publicaciones-lista-anios li, .publicaciones-anio').removeClass('active');
		jQuery('*[data-year="' + selectedYear + '"]').addClass('active');
	});
}

// Fechas en Menciones en Prensa

if(jQuery('#selector-fecha-prensa').length){
	jQuery('#selector-fecha-prensa').change(function(){
		var year = jQuery('#selector-fecha-prensa option:selected').data('year');
		var mes = jQuery('#selector-fecha-prensa option:selected').data('mes');
		console.log('Cambiando a ' + year + ', ' + mes);
		window.location.href = window.location.pathname+"?"+jQuery.param({'y':year,'mes':mes})
	});
}
