<?php

$item1 = rand(2,100);
$item2 = rand(2,10);
$item3 = rand(2,1800);
$item4 = rand(2,10);
$item5 = rand(2,10);

$array = array();


$array = array($item1, $item2, $item3, $item4, $item5);

var_dump($array);

$acum = 0;
$cdad = 0;

for ($i = 0; $i < 5 ; $i++)
{
   $array[$i]= rand(1,10);
}


foreach ($array as $value)
{ 
    $acum =  $acum + $value;
}

$promedio = $acum / count($array);

echo "el promedio es  $promedio";

/*
@promedio = $item1 + $item2 + $item3 + $item4 + $item5;

var_dump(@promedio);

if (@promedio > 6)
   echo @promedio;
elseif (@promedio=6)
   echo @promedio;
else 
   echo @promedio;*/
?>

