<?php
$i = 1;

$fX = 0;
$fY = 1;

$veces = 50;

while($i <= $veces){ 

$suma = $fX + $fY;


echo $suma.  ', ';

$fX = $fY;
$fY = $suma;

//echo 'fX = '.$fX.' fY= '.$fY . '<br>';
 
$i++;
 
}