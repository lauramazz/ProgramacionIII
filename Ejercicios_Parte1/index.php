<?php

//Aplicacion 1 (Sumar números)
//Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
//supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
//se sumaron.

echo "Aplicacion 1: ";
echo "<br/>";   

$num = 0;
$suma =0;
$cont =0;

do{
    $suma += $num;
    $num++;
    $cont++;
    echo "numero: ", $num;  
    echo "<br/>";
    echo "suma", $suma; 
    echo "<br/>";   
}while($suma<1000);

echo "Suma total: ", $suma;
echo "<br/>";
echo "Total números sumados: ", $cont;

echo "<br/>";
//Aplicación Nº 2 (Mostrar fecha y estación)
//Obtenga la fecha actual del servidor (función date ) y luego imprímala dentro de la página con
//distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
//año es. Utilizar una estructura selectiva múltiple.
echo "----------------------------------------------------------------------------------";
echo "<br/>";
echo "Aplicacion 2: ";
echo "<br/>";  

date_default_timezone_set('UTC'); //seteo zona horario
$mes = date('m');
$dia = date('d');

echo date('d-m-y');
echo "<br/>";
echo date('d-m-Y');
echo "<br/>";
switch ($mes) {
   case '01':
      echo "verano";
      break;
   case '02':
      echo "verano";
      break;
   case '03':
      if ($dia < 22) {
         echo "verano";
      } else {
         echo "otoño";
      }
      break;
   case '04':
      echo "otoño";
      break;
   case '05':
      echo "otoño";
      break;
   case '06':
      if ($dia < 22) {
         echo "otoño";
      } else {
         echo "invierno";
      }
      break;
   case '07':
      echo "invierno";
      break;
   case '08':
      echo "invierno";
      break;
   case '09':
      if ($dia < 22) {
         echo "invierno";
      } else {
         echo "primavera";
      }
      break;
   case '10':
      echo "primavera";
      break;
   case '11':
      echo "primavera";
      break;
   case '12':
      if ($dia < 22) {
         echo "primavera";
      } else {
         echo "verano";
      }
      break;
   default:
      break;
}
echo "<br/>";
//Aplicación Nº 3 (Obtener el valor del medio)
//Dadas tres variables numéricas de tipo entero $ a , $ b y $ c realizar una aplicación que muestre
//el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
//variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
//Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
//Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”
echo "----------------------------------------------------------------------------------";
echo "<br/>";
echo "Aplicacion 3: ";
echo "<br/>";  


$a = rand(0,100);
$b = rand(0,100);
$c = rand(0,100);

echo "a:  $a";
echo "<br/>";
echo "b:  $b";
echo "<br/>";
echo "c:  $c"; 
echo "<br/>";

//if($a>$b && $a>$c)


//Aplicación Nº 4 (Calculadora)
//Escribir un programa que use la variable $ operador que pueda almacenar los símbolos
//matemáticos: ‘ + ’, ‘ - ’, ‘ / ’ y ‘ * ’; y definir dos variables enteras $ op1 y $ op2 . De acuerdo al
//símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
//resultado por pantalla.
echo "----------------------------------------------------------------------------------";
echo "<br/>";
echo "Aplicacion 4: ";
echo "<br/>";  

$op1 = rand(1,100);
echo $op1;
echo "<br/>";
$op2 = rand(1,100);
echo $op2;
echo "<br/>";
$arrayOperadores = ["+","-","*","/",""];

var_dump($arrayOperadores);
echo "<br/>";

foreach($arrayOperadores as $item){

   if (isset($op1) && isset($op2) && isset($item)) {

      switch ($item) {
         case '+':
            echo $resultado = $op1 + $op2;
            echo "<br/>";
            break;
         case '-':
            echo $resultado = $op1 - $op2;
            echo "<br/>";
            break;
         case '*':
            echo $resultado = $op1 * $op2;
            echo "<br/>";
            break;
         case '/':
            echo $resultado = $op1 / $op2;
            echo "<br/>";
            break;
         default:
           echo $resultado = "Ingrese un operador válido.";
           echo "<br/>";
            break;
      }
   }
}

//Aplicación Nº 5 (Números en letras)
//Realizar un programa que en base al valor numérico de una variable $ num , pueda mostrarse
//por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
//entre el 20 y el 60.
//Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.
echo "----------------------------------------------------------------------------------";
echo "<br/>";
echo "Aplicacion 5: ";//CONSULTAARRR!!!!
echo "<br/>"; 
/*
$num = rand(20,60);
echo "numero: ".$num;

$formateoNumero = new NumberFormatter("es", NumberFormatter::SPELLOUT);


echo $formateoNumero->format($num);*/

echo "----------------------------------------------------------------------------------";
echo "<br/>";

//PARTE 2 ARRAYS

//Aplicación Nº 6 (Carga aleatoria)
//Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
//función rand ). Mediante una estructura condicional, determinar si el promedio de los números
//son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
//resultado.

$miArray = [];
$miArray[]=rand(1,99);
$miArray[]=rand(1,99);
$miArray[]=rand(1,99);
$miArray[]=rand(1,99);
$miArray[]=rand(1,99);

$suma = array_sum($miArray);

echo "Suma: ".$suma;

$promedio = $suma / count($miArray);
echo "<br/>"; 
echo "Promedio: ".$promedio;


echo "<br/>"; 
echo "----------------------------------------------------------------------------------";
echo "<br/>";

//Aplicación Nº 7 (Mostrar impares)
//Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
//Luego imprimir (utilizando la estructura for ) cada uno en una línea distinta (recordar que el
//salto de línea en HTML es la etiqueta < br/> ). Repetir la impresión de los números utilizando
//las estructuras while y foreach.

$miArray2 = [];
echo "<br/>";
var_dump($miArray2);
echo "<br/>";
$num=1;

echo "FOR:";
echo "<br/>";
echo "<br/>";

for($i=1;$i<10;$i++){  

   echo "Vuelta:", $i;
   echo "<br/>";
   
   if($num %2 != 0){     
      echo "<br/>";      
      echo array_push($miArray2, $num);     
      echo "Item Elegido: ",$num;         
   }
   $num++;
   echo "<br/>";     
}
var_dump($miArray2);

echo "<br/>";
echo "<br/>";
echo "WHILE";
echo "<br/>";
echo "<br/>";

$miArray3 = [];
$cont=1;
$num = 1;

do{
   echo "numero: ", $num;

   if($num%2!=0){
      array_push($miArray3, $num);
      echo "elegido: ",$num;
      echo "<br/>";
   }
   $num++;
   $cont++;
   echo "<br/>";
}while($cont<10);
echo "<br/>";
var_dump($miArray3);

echo "<br/>";
echo "<br/>";
echo "FOREACH";
echo "<br/>";
echo "<br/>";

foreach($miArray3 as $valor){
   echo $valor;
   echo "<br/>";
}

echo "<br/>"; 
echo "----------------------------------------------------------------------------------";
echo "<br/>";

//Aplicación Nº 8 (Carga aleatoria)
//Imprima los valores del vector asociativo siguiente usando la estructura de control foreach :
//$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';


$vectorAsociativo =[];

$vectorAsociativo[1] = 90;
$vectorAsociativo[30] = 7;
$vectorAsociativo['e'] = 99;
$vectorAsociativo['hola'] = 'mundo';

var_dump($vectorAsociativo);


echo "<br/>"; 
echo "----------------------------------------------------------------------------------";
echo "<br/>";

//Aplicación Nº 9 (Arrays asociativos)
//Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
//contenga como elementos: ‘color’ , ‘marca’ , ‘trazo’ y ‘precio’ . Crear, cargar y mostrar tres
//lapiceras.

$lapicera = [];
$lapicera['color'] = "rojo";
$lapicera['marca'] = 'Bic';
$lapicera['trazo'] = "grueso";
$lapicera['precio'] = "20";

$lapicera1 = [];
$lapicera1['color'] = "verde";
$lapicera1['marca'] = 'Paper Mate';
$lapicera1['trazo'] = "fino";
$lapicera1['precio'] = "30";

$lapicera2 = [];
$lapicera2['color'] = "azul";
$lapicera2['marca'] = 'Symbal';
$lapicera2['trazo'] = "grueso";
$lapicera2['precio'] = "50";

var_dump($lapicera);
echo "<br/>";
var_dump($lapicera1);
echo "<br/>";
var_dump($lapicera2);
echo "<br/>"; 
echo "----------------------------------------------------------------------------------";
echo "<br/>";

//Aplicación Nº 10 (Arrays de Arrays)
//Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
//contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
//Arrays de Arrays.

$arrayIndex = [];
array_push($arrayIndex, $lapicera);
array_push($arrayIndex, $lapicera1);
array_push($arrayIndex, $lapicera2);
echo "<br/>"; 
echo "arrayIndex";
var_dump($arrayIndex);
echo "<br/>"; 
$arrayIndex1 = [$lapicera, $lapicera1, $lapicera2];
echo "arrayIndex1";
var_dump($arrayIndex1);
echo "<br/>"; 
$arrayAsoc = [];
$arrayAsoc = array('lapi1'=>$lapicera, 'lapi2'=>$lapicera1, 'lapi3'=>$lapicera2);
echo "arrayAsoc";
var_dump($arrayAsoc);



echo "<br/>"; 
echo "----------------------------------------------------------------------------------";
echo "<br/>";

?>