<?php
$candidata = array();
$i = 1;
$parar = 0;
function porcentaje($total, $parte, $redondear = 1) {
    return round($parte / $total * 100, $redondear);
    //return $parte / $total * 100;
};
///////////////////////
$candidatas = 4;
///////////////////////
$candidata['1']['ciudadA'] = '200';
$candidata['1']['ciudadB'] = '350';
$candidata['1']['ciudadC'] = '400';

$candidata['1']['TOTAL'] = $candidata['1']['ciudadA'] + $candidata['1']['ciudadB'] + $candidata['1']['ciudadC'];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$candidata['2']['ciudadA'] = '1234';
$candidata['2']['ciudadB'] = '2450';
$candidata['2']['ciudadC'] = '990';

$candidata['2']['TOTAL'] = $candidata['2']['ciudadA'] + $candidata['2']['ciudadB'] + $candidata['2']['ciudadC'];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$candidata['3']['ciudadA'] = '2040';
$candidata['3']['ciudadB'] = '3050';
$candidata['3']['ciudadC'] = '1000';

$candidata['3']['TOTAL'] = $candidata['3']['ciudadA'] + $candidata['3']['ciudadB'] + $candidata['3']['ciudadC'];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$candidata['4']['ciudadA'] = '750';
$candidata['4']['ciudadB'] = '890';
$candidata['4']['ciudadC'] = '1500';

$candidata['4']['TOTAL'] = $candidata['4']['ciudadA'] + $candidata['4']['ciudadB'] + $candidata['4']['ciudadC'];
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$totalVotos = $candidata['1']['TOTAL'] + $candidata['2']['TOTAL'] + $candidata['3']['TOTAL'] + $candidata['4']['TOTAL'];

$candidata['1']['PORCENTAJE'] = porcentaje($totalVotos, $candidata['1']['TOTAL']);
$candidata['2']['PORCENTAJE'] = porcentaje($totalVotos, $candidata['2']['TOTAL']);
$candidata['3']['PORCENTAJE'] = porcentaje($totalVotos, $candidata['3']['TOTAL']);
$candidata['4']['PORCENTAJE'] = porcentaje($totalVotos, $candidata['4']['TOTAL']);

echo 'Candidata 1: ' . $candidata['1']['PORCENTAJE'] . ' %<br>';
echo 'Candidata 2: ' . $candidata['2']['PORCENTAJE'] . ' %<br>';
echo 'Candidata 3: ' . $candidata['3']['PORCENTAJE'] . ' %<br>';
echo 'Candidata 4: ' . $candidata['4']['PORCENTAJE'] . ' %<br>';
echo '<br>';
while($i <= $candidatas){ 
if($candidata[$i]['PORCENTAJE'] >= '50.1') { echo 'Candidata '.$i.' gan&oacute; el concurso<br>'; die(); } else { echo 'Candidata '.$i.' no gan&oacute;<br>'; };
$i++;
};

////segunda vuelta
if($parar != '1') {


};





