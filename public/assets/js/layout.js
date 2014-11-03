
var $menu = $('.MainMenu'),
	$mostrar= $('.Header-menuLeft'),
	$cerrar=$('.MainMenu-close'),
	$overlay=$('.Body-overlay'),
	$body=$('.Body-container'),
	$bodyGeneral=$('body');

function mostrarMenu(){
	$menu.animate({width:'toggle'},20);
	$body.css('position', 'relative');
	$body.css('right', '-285px');
	$bodyGeneral.css('overflow-y', 'hidden');
	// $body.css('margin-left', '20.4em');
	$overlay.css('display', 'block');
	return false;
}

function cerrarMenu(){
	$menu.animate({width:'toggle'},20);
	$body.css('right', '0');
	$body.css('position', 'relative');
	$bodyGeneral.css('overflow-y', 'visible');
	$overlay.css('display','none');
	return false;
}

if (screen.width <= 360) {
	$(document).ready(function($){
	$mostrar.click(function(event) {
	$body.css('position', 'fixed');

});
});
}

$mostrar.click(mostrarMenu);
$cerrar.click(cerrarMenu);
$overlay.click(cerrarMenu);



