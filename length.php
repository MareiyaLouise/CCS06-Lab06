<?php
function compute($value) {
	$res = strlen($value);
    $fin = $res * 2;
    return $fin;
}

echo compute("TWISTER");
?>
