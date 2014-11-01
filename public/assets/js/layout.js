
var $menu = $('.MainMenu'),
	$mostrar= $('.Header-menuLeft'),
	$cerrar=$('.MainMenu-close'),
	$overlay=$('.Body-overlay'),
	$body=$('.Body-container');


function mostrarMenu(){
	$menu.animate({width:'toggle'},20);
	$body.css('right', '-285px');
	$body.css('position', 'fixed');
	// $body.css('margin-left', '20.4em');
	$overlay.css('display', 'block');
	
	return false;
}

function cerrarMenu(){
$menu.animate({width:'toggle'},20);
$body.css('right', '0');
$body.css('position', 'absolute');
$overlay.css('display','none');
}

$mostrar.click(mostrarMenu);
$cerrar.click(cerrarMenu);
$overlay.click(cerrarMenu);

