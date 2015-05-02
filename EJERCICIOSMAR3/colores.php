<?php
	$color='r';
if($color=='r'){
		$co='#f00';
}
?>
<p style="color:<?php print$co; ?>">bloque if -- Evalua una condicion</p>
<?php
	$color = 'b' ;
if ($color=='r'){
	$co= '#f00';

}else{
	$co = '#00f' ;
}
?>
<p style="color:<?php print $co; ?>">bloque if/else
evalua dos condiciones</p>
<?php
$color='g';
if ($color=='r'){
	$co='#f00';
}else if($color='g'){
	$co = '#0f0';

}else {
	$co = '#00f' ;
}
?>
<p style= "color:<?php print$co;?>">bloque if /else if/ else
evalua mas de dos opciones </p>