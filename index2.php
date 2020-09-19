<?php
//Aplicación Nº 11 (Potencias de números)
//Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función
//que las calcule invocando la función pow ).
echo "<br/>";  
echo 'Ejercicio 11';

$num = 1;

function CalculaPotencia($numero){

    for($i=1;$i<=4;$i++){
        $potencia =  pow($numero,$i);
        echo "<br/>";   
        echo 'potencia '.$i.'de '.$numero.': '.$potencia;
       
    }
}

while($num<=4)
{
    echo "<br/>";   
    CalculaPotencia($num);
    $num++;   
}

//Aplicación Nº 12 (Invertir palabra)
//Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
//de las letras del Array.
//Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
echo "<br/>"; 
echo "<br/>"; 
echo 'Ejercicio 12:';
echo "<br/>"; 
echo "<br/>"; 

$palabra = 'HOLA';
$arrayPalabra=[];
$arrayPalabra = str_split($palabra);

var_dump($arrayPalabra);


function invertirPalabra($arrPalabra)
{
    return array_reverse($arrPalabra);
}

$arrayPalabra = invertirPalabra($arrayPalabra);

echo "<br/>"; 
echo "<br/>"; 

var_dump($arrayPalabra);

//Aplicación Nº 13 (Invertir palabra)
//Crear una función que reciba como parámetro un string ($palabra ) y un entero ($max ). La
//función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
//deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
//“Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán:
//1 si la palabra pertenece a algún elemento del listado.
//0 en caso contrario.
echo "<br/>"; 
echo "<br/>"; 
echo 'Ejercicio 13:';
echo "<br/>"; 
echo "<br/>"; 
$cdadValida=false;

function validaCdadCaracteres($palabra, $max){
    if(strlen($palabra)<=$max){
        $cdadValida = true;        
    }    

    if($cdadValida){
        switch($palabra){ 
            case 'Recuperatorio':       
                return 1;           
            break;
            case 'Parcial':
                return 1;
            break;
            case 'Programacion':
                return 1;
            break;
            default:
               return 0;
            break;
        }
    }
    else{
        return 'cdad invalida';
    }
}
echo "<br/>"; 

    echo validaCdadCaracteres('hola',8);
    echo "<br/>"; 

    echo validaCdadCaracteres('Parcial', 10);
    echo "<br/>"; 

//Aplicación Nº 14 (Par e impar)
//Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
//si este número es par ó FALSE si es impar.
//Reutilizando el código anterior, crear la función esImpar .
echo "<br/>"; 
echo 'Ejercicio 14:';
echo "<br/>"; 
echo "<br/>"; 
function esPar($numero){
    if($numero%2==0)
    {
        return true; 
    }
    else{
        return false;
    }
}

$valor = 0;
$isPar = esPar($valor);
if($isPar){
    echo $valor.' es par';
}
else{
    echo $valor.' es impar';
}
echo "<br/>"; 

?>

