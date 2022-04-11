<?php

$arr = array (0,1, 2, 3, 4, 6);
foreach($arr as $key => $value)
if ($key == $value);
 else {
	$e = $value - 1;
	echo  "<p>Пропущенный элемент массива: <b>$e</b></p>";
}
?>